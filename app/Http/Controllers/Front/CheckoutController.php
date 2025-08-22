<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Model\Country;
use App\Model\Discount;
use App\Model\Order;
use App\Model\OrderAddress;
use App\Model\OrderDetail;
use App\Model\PaymentMethod;
use App\Model\Shipping;
use App\Model\Size;
use App\Model\Stock;
use App\Model\Color;
use App\Model\Product;
use App\Weight;
use App\ShippingPrice;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class CheckoutController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except(['checkout_address']);
        $this->middleware('auth')->except(['direct_checkout','direct_checkout_success','applyPromo']);
    }

    // Function to get cities using ajax, when country field changes
    public function get_city($slug){
        $country = Country::where('slug', $slug)
                   ->first();
        return $country->city;
    }

    public function get_shipping_price($city){

        return Shipping::where('shipping_location', $city)
                        ->first();
    }

    public function order_now(Request $request){
        if($request->isMethod('GET')){
            $request->validate([
                "color"=>"required",
                'quantity' => 'required|numeric|min:1',
            ]);

            $size = null;

            $product = Product::where('slug', $request->product_slug)->first();
            $quantity = $request->quantity;
            if($product->size_variation==1){
                if(!Size::find($request->size)){
                    return back()->withErrors(['msg' => 'Please choose size of the product']);
                }
                $size = Size::find($request->size);
            }

            $color = Color::where('title', $request->color)->first();
            // Out of stock due to cart
            foreach(Cart::content() as $item){

                // For size and color field
                if($product->size_variation==1){
                    $totalStock = $product->totalStock($color->id, $size->id);
                    // Match credential on current cart
                    if($item->id==$product->id && $item->options->color==$color->title && $item->options->size==$size->title){
                        if(($item->qty + $quantity) > $totalStock){
                            $quantity = $totalStock - $item->qty;
                        }
                    }

                }else{
                    //For color only field
                    $totalStock = $product->totalStock($color->id);
                    // Match credential on current cart
                    if($item->id==$product->id && $item->options->color==$color->title){
                        if(($item->qty + $quantity) > $totalStock){
                            $quantity = $totalStock - $item->qty;
                        }
                    }
                }
                // If quantity is 0, avoid invalid data entry in cart
            }

            if($quantity==0){
                return back()->withErrors(['msg' => 'Out of stock, already added in Cart']);
            }

            $user = Auth::user();
            $weight = $request->quantity * $product->weight;
            $weight_category = $this->weight_category($weight);
            $shipping_option = $this->shipping_option($weight_category);
            $final = $product->price * $quantity;
            $color = $request->color;
            if($size!=null){
                $size = $size->title;
            }


            return view('frontend/pages/checkout/checkout-details', compact('user', 'color', 'size', 'product', 'quantity', 'final', 'weight', 'weight_category', 'shipping_option'));
        }
    }

    function weight_category($weight){
        $weight_category = Weight::where('min', '<=', $weight)->where('max', '>=', $weight)->first();
        if(!$weight_category){
            // Maximum weight value if none matches
            $weight_category = Weight::orderBy('max','DESC')->first();
        }

        return $weight_category;
    }

    function shipping_option($weight_category){
        return ShippingPrice::where([
            ['status', '=', '1'],
            ['weight_id', '=', $weight_category->id],
        ])->get();
    }
    public function checkout_address(Request $request)
    {
        if ($request->isMethod('get')) {
            // Cart empty validation
            if(Cart::count()<1){
                return redirect()->back()->withErrors(['msg' => 'Cart is empty']);  
            }

            // Out of stock validation
            foreach (Cart::content() as $cartItem) {
                $product = Product::find($cartItem->id);

                if($cartItem->id){
                    $totalStock = $product->stock;
                }
                if($totalStock < $cartItem->qty){
                    //Cart::destroy();

                    $cartItem->qty = $totalStock;
                    return back()->with('error', 'Stock not available');
                }
            }

            $cartPrice = ['subTotal' => Cart::subtotal(), 'count' => Cart::count()];
            $cartItem = Cart::content();
            $countries = Country::all();
            $shipping = Shipping::where('status', 1)->get();
            $sub = Cart::subtotal();
            $total = preg_replace("/[^0-9.]/", "", $sub);
            $final = (float)$total;
            $user = Auth::user();
            $userInfo = null;
            $userOrder = Order::where('user_id',$user->id)->latest()->first();
            if($userOrder)
            {
                $userInfo = $userOrder->addresses;
            }

            // Calculate total weight of the cart
            $weight = 0;

            foreach (Cart::content() as $content) {
                $wt = Product::find($content->id)->weight;
                $qt = $content->qty;
                $weight += ($wt * $qt);
            }

            // Determine weight category
            $weight_category = $this->weight_category($weight);

            // Shipping option
            // $shipping_option = $this->shipping_option($weight_category);
            $shipping_option ='';

           return view('frontend/pages/checkout/checkout-details', compact('user','userInfo', 'cartItem', 'countries', 'shipping', 'final', 'weight', 'weight_category', 'shipping_option', 'cartPrice'));
        }

        if ($request->isMethod('post')) 
        {
            try{
                $request->validate([
                    'first_name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'country'=>'required',
                    'city'=>'required',
                ]);

                DB::beginTransaction();

                $user = Auth::user();
                $used_message = (int)0;
                $promo_discount = Discount::where('id', $request->discount_id)
                                            ->where('status', 1)
                                            ->whereColumn('usage_limit', '>', 'used')
                                            ->where(function($q){
                                                $q->whereNull('expiry_date')->orWhere('expiry_date', '>=', today());
                                            })
                                            ->first();

                if ($promo_discount) 
                {
                    $alreadyUsed = Order::where('user_id', $user->id)
                        ->where('discount_id', $promo_discount->id)
                        ->exists();

                    if ($alreadyUsed) {
                        $promo_discount = null;
                        $used_message = 1;
                    }
                }
                $discount_amount = (float) 0;
                $cartPrice = ['subTotal' => Cart::subtotal(), 'count' => Cart::count()];
                $cartItem = Cart::content();
                $shipping = Shipping::where('id', $request->shipping)->first();
                $subTotal = (float) str_replace(',', '', Cart::subtotal());
                
                if($promo_discount){
                    if($promo_discount->type === 'flat'){
                        $discount_amount = $promo_discount->discount;
                    } else {
                        $discount_amount = $subTotal * $promo_discount->discount * 0.01;
                    }
                    $discount_amount = min($discount_amount, $subTotal);
                }
                $grandTotal = $subTotal + (float) $shipping->shipping_price - (float) $discount_amount;

                // dd('test post',$shipping, $request->all(),$cartItem,$cartPrice,$grandTotal,$discount_amount);
                
                $order = Order::create([
                    'subtotal'       => $subTotal,
                    'grand_total'    => $grandTotal,
                    'user_id'        => $user->id,
                    'shipping_id'    => $shipping->id,
                    'order_track'    => 'OT' . $user->id . '-' . time(),
                    'status'         => 0,
                    'discount'       => $discount_amount,
                    'discount_id'    => $promo_discount->id ?? NULL,
                    'payment_type'   => $request->payment,
                    'order_note'     => $request->message,
                ]);

                $userInfo = OrderAddress::create([
                    'first_name' => $request->first_name,
                    'last_name'  => $request->last_name,
                    'email'      => $request->email,
                    'phone'      => $request->phone,
                    'country'    => $request->country,
                    'province'   => $request->province,
                    'city'       => $request->city,
                    'zip_code'   => $request->zip_code,
                    'address1'   => $request->address_1,
                    'address2'   => $request->address_2,
                    'order_id'   => $order->id,
                ]);
            
                foreach ($cartItem as $item) {
                    OrderDetail::create([
                        'order_id'  => $order->id,
                        'product_id'=> $item->id,
                        'price'     => $item->price,
                        'quantity'  => $item->qty,
                        'size'      => $item->options['size'],
                        'color'     => $item->options['color'],
                        'discount'  => 0,
                        'total'     => (float)$item->price * (int)$item->qty,
                    ]);

                    $product = Product::findOrFail($item->id);
                    $product->decrement('stock', $item->qty);
                }

                if($promo_discount){
                    $promo_discount->increment('used');
                }

                DB::commit();

                $data = ['email' => $user->email, 'order' => $order,'user' => $userInfo,'used_msg' => $used_message];

                if(!isset($request->is_order)){
                    Cart::destroy();
                }
            
            }catch(ValidationException $e){
                return redirect()->back()->with([
                    'error' => true,
                    'message' => $e->validator->errors()->all()
                ]);
            }catch(Exception $e){
                DB::rollBack();
                return redirect()->back()->with([
                    'error' => true,
                    'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
                ]);
            }

            try {
                return new OrderMail($data);
                // Mail::to($user->email)->send(new OrderMail($data));
            } catch (Exception $e) {
                Log::error("Order email failed for order {$order->id}: " . $e->getMessage());
            }
            return redirect('/')->with([
                'success' => true,
                'message' => 'Order placed successfully!'
            ]);
        }
    }

    public function direct_checkout( $slug )
    {
        $quantity = request()->query('quantity', 1);
        $product = Product::where('slug',$slug)->first();
        if (!$product) {
            abort(404);
        }
        if($product->discount_price){
            $total = (int)$quantity * (float)$product->discount_price; 
        } else {
            $total = (int)$quantity * (float)$product->price;
        }
        $shipping = Shipping::where('status', 1)->get();

        // dd('test get',$slug, $quantity,$product,$total);

        return view('frontend/pages/checkout/checkout-direct', compact('product','quantity','total','shipping'));
    }

    public function direct_checkout_success(Request $request)
    {
        try{
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'country'=>'required',
                'city'=>'required',
            ]);
            DB::beginTransaction();

            $used_message = 0;
            $product = Product::where('id',$request->product_id)->first();
            $shipping = Shipping::where('id', $request->shipping)->first();
            $promo_discount = Discount::where('id', $request->discount_id)
                                        ->where('status', 1)
                                        ->whereColumn('usage_limit', '>', 'used')
                                        ->where(function($q){
                                            $q->whereNull('expiry_date')->orWhere('expiry_date', '>=', today());
                                        })
                                        ->first();
            $alreadyUsed = Order::where('email', $request->email)
                        ->where('discount_id', $promo_discount->id)
                        ->exists();
            if ($alreadyUsed) {
                $promo_discount = null;
                $used_message = 1;
            }
            $discount_amount = (float) 0;
            if($product->discount_price){
                $sell_price = (float)$product->discount_price; 
            } else {
                $sell_price = (float)$product->price;
            }

            $subTotal = (int)$request->quantity * (float)$sell_price;
            if($promo_discount){
                if($promo_discount->type === 'flat'){
                    $discount_amount = $promo_discount->discount;
                } else {
                    $discount_amount = $subTotal * $promo_discount->discount * 0.01;
                }
                $discount_amount = min($discount_amount, $subTotal);
            }
            $grandTotal = $subTotal + (float) $shipping->shipping_price - (float) $discount_amount;

            // dd('test post',$shipping, $request->all(),$subTotal, $grandTotal ,$promo_discount,$discount_amount);
            
            $order = Order::create([
                'subtotal'       => $subTotal,
                'grand_total'    => $grandTotal,
                'shipping_id'    => $shipping->id,
                'order_track'    => 'OT' . mt_rand(100, 999). '-' . time(),
                'status'         => 0,
                'discount'       => $discount_amount,
                'discount_id'    => $promo_discount->id ?? NULL,
                'payment_type'   => $request->payment,
                'order_note'     => $request->message,
            ]);

            $userInfo = OrderAddress::create([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'country'    => $request->country,
                'province'   => $request->province,
                'city'       => $request->city,
                'zip_code'   => $request->zip_code,
                'address1'   => $request->address_1,
                'address2'   => $request->address_2,
                'order_id'   => $order->id,
            ]);

            OrderDetail::create([
                'order_id'   => $order->id,
                'product_id' => $product->id,
                'price'      => $sell_price,
                'quantity'   => $request->quantity,
                'size'       => $request->size,
                'color'      => $request->color,
                'discount'   => 0,
                'total'      => $subTotal,
            ]); 
            $product->decrement('stock', $request->quantity);
            if($promo_discount){
                $promo_discount->increment('used');
            }

            DB::commit();

            $data = ['email' => $request->email, 'order' => $order,'user' => $userInfo,'used_msg' => $used_message];
        
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }

        try {
            return new OrderMail($data);
            // Mail::to($user->email)->send(new OrderMail($data));
        } catch (Exception $e) {
            Log::error("Order email failed for order {$order->id}: " . $e->getMessage());
        }
        return redirect('/')->with([
            'success' => true,
            'message' => 'Order placed successfully!'
        ]);
    }
    public function applyPromo(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:25',
        ]);

        $discount = Discount::where('code', $request->code)
                            ->where('status', 1)
                            ->where(function($q){
                                $q->whereColumn('usage_limit', '>', 'used')
                                ->where(function($q2){
                                    $q2->whereNull('expiry_date')->orWhere('expiry_date', '>=', today());
                                });
                            })
                            ->first();
        $user = Auth::user();                  
        if($user){
            $alreadyUsed = Order::where('user_id', $user->id)
                        ->where('discount_id', $discount->id)
                        ->exists();

            if ($alreadyUsed) {
                $discount= null;
            }
        }

        if (!$discount) {
            return response()->json(['success' => false, 'message' => 'Invalid or expired promo code.']);
        }

        return response()->json([
            'success' => true,
            'message' => 'Promo code applied successfully!',
            'discount' => [
                'type' => $discount->type,
                'discount' => $discount->discount,
                'id' => $discount->id
            ]
        ]);
    }


    public function shipping_page()
    {
        return view('frontend/pages/checkout/checkout-shipping');
    }

    public function checkout_payment(Request $request)
    {
        if ($request->isMethod('get')) {
            $order = Order::where('id', $request->order_id)->first();
            $cartItem = Cart::content();
            $payment=PaymentMethod::where('status',1)->get();
            return view('frontend/pages/checkout/checkout-payment', compact('order', 'cartItem','payment'));
        }

    }

    public function checkout_review(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        $cartItem = Cart::content();
        return view('frontend/pages/checkout/checkout-review', compact('cartItem', 'order'));
    }

    public function checkout_complete(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        return view('frontend/pages/checkout/checkout-complete',compact('order'));
    }

    public function track_form()
    {
        return view('frontend/pages/checkout/order-tracking-form');
    }

    public function track_order(Request  $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        $details=$order->details;
        return view('frontend/pages/checkout/order-tracking',compact('details','order'));

    }
}
