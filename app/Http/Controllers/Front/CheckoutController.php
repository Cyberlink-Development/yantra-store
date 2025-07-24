<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Model\Country;
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

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

        //dd($request->all);
        if ($request->isMethod('get')) {

            // Cart empty validation
            if(Cart::count()<1){
                return redirect()->back()->withErrors(['msg' => 'Cart is empty']);  
            }

            // Out of stock validation
            foreach (Cart::content() as $cartItem) {
                $product = Product::find($cartItem->id);
                $color = Color::where('title', $cartItem->options->color)->first();

                if($product->size_variation==1){
                    $size = Size::where('title', $cartItem->options->size)->first();
                    $totalStock = $product->totalStock($color->id, $size->id);
                }else{
                    $totalStock = $product->totalStock($color->id);
                }
                if($totalStock < $cartItem->qty){
                    //Cart::destroy();

                    $cartItem->qty = $totalStock;
                    return back()->with('error', 'Stock not available');
                }
            }


            $cartItem = Cart::content();
            $countries = Country::all();
            $shipping = Shipping::where('status', 1)->get();
            $sub = Cart::subtotal();
            $total = preg_replace("/[^0-9.]/", "", $sub);
            $final = (int)$total;
            $user = Auth::user();

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
            $shipping_option = $this->shipping_option($weight_category);

           return view('frontend/pages/checkout/checkout-details', compact('user', 'cartItem', 'countries', 'shipping', 'final', 'weight', 'weight_category', 'shipping_option'));
        }
        if ($request->isMethod('post')) {

            

//            dd((new \Gloudemans\Shoppingcart\Cart)->instance(Auth::user()->id));
//            dd(Cart::content());
              //dd($request->all());
            //   if($request->country == "value" || $request->city == "value"){
            //     dd("Please enter city and country");
            //   }
            // dd($request->country);
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'shipping_option'=>'required',
                // 'zip_code' => 'required',
                'address_1' => 'required',
                'country'=>'required',
                'city'=>'required',
                // 'address_2' => 'required',
            ]);

            $data['subtotal'] = $request->subtotal;
            $data['tax'] = 0;
            $data['grand_total'] = $request->subtotal + $request->shipping;
//            $data['discount'] = 0;
            $data['user_id'] = $request->user_id;
            //$data['shipping_id'] = $request->shipping_id;
            $data['courier_id'] = $request->shipping_id;
            $data['order_track'] = 'OT' . $request->user_id . '-' . time();
            $data['status']=0;
            $data['order_note'] = $request->order_note;
            $data['weight'] = $request->weight;
            $order = Order::create($data);

            $order_id = $order->id;

            $data['first_name'] = $request->first_name;
            $data['last_name'] = $request->last_name;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['country'] = $request->country;
            $data['city'] = $request->city;
            $data['zip_code'] = $request->zip_code;
            $data['address1'] = $request->address_1;
            $data['address2'] = $request->address_2;
            $data['order_id'] = $order_id;
            $save = OrderAddress::create($data);
            $address_id = $save->id;

            if(isset($request->is_order)){

                $product = Product::where('slug', $request->product_slug)->first();

                $detail = new OrderDetail();
                $detail->order_id = $order->id;
                $detail->product_id = $product->id;
                $detail->price = $product->price;
                $detail->quantity = $request->quantity;
                $detail->size = $request->size;
                $detail->color = $request->color;
                $detail->discount = 0;
                $detail->total = $product->price * $request->quantity;
                $detail->save();
            }
            else{
                foreach (Cart::content() as $product) {
                    $detail = new OrderDetail();
                    $detail->order_id = $order->id;
                    $detail->product_id = $product->id;
                    $detail->price = $product->price;
                    $detail->quantity = $product->qty;
                    $detail->size = $product->options['size'];
                    $detail->color = $product->options['color'];
                    $detail->discount = 0;
                    $detail->total = $product->price * $product->qty;
                    $detail->save();
                }
            }

            foreach($order->details as $orderDetail){
                $color_id = Color::where('title', $orderDetail->color)->pluck('id')->first();
                $product = Product::find($orderDetail->product_id);
                $size_id = Size::where('title', $orderDetail->size)->pluck('id')->first();

                if($orderDetail->size==null){
                    $totalStock = $product->totalStock($color_id);
                    $remaining = $totalStock - $orderDetail->quantity;

                    DB::table('color_stocks')
                        ->where('color_id', $color_id)
                        ->where('product_id', $product->id)
                        ->update(['stock' => $remaining]);
                }else{
                    $totalStock = $product->totalStock($color_id, $size_id);
                    $remaining = $totalStock - $orderDetail->quantity;

                    DB::table('stocks')
                        ->where('color_id', $color_id)
                        ->where('size_id', $size_id)
                        ->where('product_id', $product->id)
                        ->update(['stock' => $remaining]);
                }
            }

//            foreach ($order->order_details as $orderDetail) {
////                dd($product->colorstocks->first()->pivot->stock);
//                if ($orderDetail->products->size_variation == 0) {
//                    $decreasedQuantity =$orderDetail->products->colorstocks->first()->pivot->stock - $orderDetail->quantity;
//                    $update = DB::table('color_stocks')
//                        ->where('product_id', $orderDetail->product_id)
//                        ->where('color_id', $orderDetail->products->colorstocks->first()->id)
//                        ->update(['stock' => $decreasedQuantity]);
////                    $idss=array($product->colorstocks->first()->id);
//////                    $decreasedQuantity = $product->colorstocks->first()->pivot->stock - $orderDetail->quantity;
////
////
////                    $product->colorstocks()->sync([0=>2], ['stock' =>300]);
//                } else {
//                    $size = Size::where('title', $orderDetail->size)->first();
//                    $stock = Stock::where('product_id', $product->id)->where('size_id', $size->id)->first();
//                    $stock->stock = $stock->stock - 1;
//                    $stock->save();
//                }
//            }
            //sending email
//        $user = Auth::user();
//        $data = ['email' => $user->email, 'order' => $order];
//        return new OrderMail($data);
//        Mail::to($user->email)->send(new OrderMail($data));

            if ($order && $save) {
                if(!isset($request->is_order)){
                    Cart::destroy();
                }
                return view('frontend/pages/checkout/checkout-complete', compact('order'));
            }

        }

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
