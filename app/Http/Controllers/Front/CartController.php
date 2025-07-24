<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Stock;
use App\Model\Color;
use App\Model\Size;
use App\Model\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CartController extends FrontController
{
    public function add_cart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'color' => 'required',
            'quantity' => 'required|numeric|min:1'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }

        $product = Product::where('id', $request->product_id)->first();
        $quantity = $request->quantity;
        if($product->size_variation==1){
            if(!Size::where('title', $request->size)->first()){
                return response()->json([
                    'errors' => ["Please choose size"]
                ]);
            }
        }
        $color = Color::where('title', $request->color)->first();

        // Check if demand exceeds available stock

        foreach(Cart::content() as $item){

            // For size and color field
            if($product->size_variation==1){
                $size = Size::where('title', $request->size)->first();
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
            return response()->json([
                'errors' => ["Stock not available"]
            ]);
        }

        $cartItem = Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'qty' => $quantity,
            'price' => Auth::check() && Auth::user()->roles=='wholeseller' ? $product->wholesale_price : $product->discount_price,
            'options' =>
                [
                    'image' => $product->images->where('is_main', '=', 1)->first()->image,
                    'color' => $request->color,
                    'size' => $request->size,
                     'slug'=>$product->slug,
                    'stock'=> $product->stocks ? $product->stocks->where('size',$request->size)->first() : $product->colorstocks
                ],
        ]);
        return view($this->frontendPagePath . 'filter/cart_mini');

    }
    private function cartCheck($request){
        dd($request);
    }

    public function cart_item()
    {
        $cartItem = Cart::content();

        return view('frontend/pages/cart-page', compact('cartItem'));
    }

    public function cart_remove(Request $request)
    {
        $rowId = $request->get("id");
        Cart::remove($rowId);
        
        //return view($this->frontendPagePath . 'filter/cart_mini');

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully removed from Cart ',
            'count' => Cart::count(),
            'subTotal'=>Cart::subtotal(),
        ]);
        // return back()->with('success', 'Item removed from cart');
    }

    public function cart_update(Request $request)
    {
        if (!empty($request->id && $request->quantity) ) {
            $id = $request->id;
            $quantity = $request->quantity;
            for ($i = 0; $i < count($quantity); $i++) {
                Cart::update($id[$i], $quantity[$i]);
            }
            return response()->json([
                'status' => 'success', 
                'message' => 'Successfully updated Cart ', 
                'count'=>Cart::count(),
                'subTotal'=>Cart::subtotal(),
            ]);
        }else{
            return response()->json(['status' => 'errors', 'message' => 'Error in updating cart']);
        }
    }

    public function cart_filter(Request $request)
    {
        if ($request->ajax()) {
            if ($request->free_size) {
                $color_name = $request->color;
                $size_name = $request->free_size;


                $stock = Stock::leftjoin('colors', 'colors.id', '=', 'stocks.color_id')
                    ->leftjoin('sizes', 'sizes.id', '=', 'stocks.size_id')
                    ->where('sizes.title', $size_name)
                    ->where('colors.title', $color_name)
                    ->where('product_id', $request->product_id)
                    ->first();
                $value = $stock ? $stock->stock : 0;
            } else {
                $color_name = $request->color;
                $stock = DB::table('color_stocks')->leftJoin('colors', 'colors.id', '=', 'color_stocks.color_id')
                    ->where('colors.title', $color_name)
                    ->where('product_id', $request->product_id)
                    ->first();
                $value = $stock ? $stock->stock : 0;

            }
        }

        return response()->json(['stock_amount' => $value], 200);
    }

    public function show_wishlist(Request $request)
    {

        if ($request->isMethod('get')) {
            if (Auth::check()){
                $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
                $order = Auth::user()->orders;
                return view('frontend/pages/account-wishlist', compact('wishlist','order'));
            }
            else{
                return back()->with('error','Please login first');
            }

        }

    }

    public function add_wishlist(Request $request)
    {
        if (Auth::check()) {
            if ($request->isMethod('get')) {
                $old_wishlist = Wishlist::where('product_id', $request->id)->where('user_id', Auth::user()->id)->first();
                if ($old_wishlist != null) {
                    return back()->with('error', 'Item already added to wishlist');
                }
                $list = new Wishlist();
                $list->user_id = Auth::user()->id;
                $list->product_id = $request->id;
                $list->save();
                return back()->with('success', 'Item added to wishlist');
            }
        }else{
            return back()->with('error','Please login first');
        }

    }


    public function delete_wishlist(Request $request)
    {
        $find = Wishlist::findorfail($request->id);
        $find->delete();
        return back()->with('success', 'Item removed from wishlist');
    }

}
