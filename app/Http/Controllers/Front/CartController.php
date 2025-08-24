<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Stock;
use App\Model\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use Log;
use Illuminate\Validation\ValidationException;


class CartController extends FrontController
{
    public function add_cart(Request $request)
    {
        try{
            Validator::make($request->all(), [
                'quantity' => 'required|numeric|min:1'
            ]);
            // $validator = Validator::make($request->all(), [
            //     'quantity' => 'required|numeric|min:1'
            // ]);
            // if ($validator->fails()) {
            //     return response()->json([
            //         'errors' => $validator->errors()->all()
            //     ]);
            // }
            $product = Product::where('id', $request->product_id)->first();
            $quantity = $request->quantity;

            // Check if demand exceeds available stock
            foreach (Cart::content() as $cartItem) {
                $productStock = $product->stock;
                try {
                    if ($cartItem->id == $product->id) {
                        if ($quantity + $cartItem->qty > $productStock) {
                            $quantity = $productStock - $cartItem->qty;
                        }
                    }
                } catch (Exception $e) {
                    echo $e;
                }
            }
            if ($quantity == 0) {
                return response()->json([
                    'error' => true,
                    'message' => "Stock not available"
                ]);
            }

            Cart::add([
                'id' => $request->product_id,
                'name' => $product->product_name,
                'qty' => $quantity,
                'price' => Auth::check() && Auth::user()->roles == 'wholeseller' ? $product->wholesale_price : $product->discount_price,
                'options' =>
                [
                    'image' => $product->images->where('is_main', '=', 1)->first()->image,
                    'color' => $request->color,
                    'size' =>  $request->size,
                    'slug' =>   $product->slug,
                    'stock' =>  $product->stock,
                    'brand' =>  $product->brands
                ],
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Item added in cart successfully',
                'view' => view('components.cart.cart_nav')->render(),
                'newItemCount' => Cart::count()
            ]);
        }catch(ValidationException $e){
            return response()->json([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error("Item add in cart failed: " .$e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }

    public function cart_item()
    {
        return view('frontend.pages.cart-page');
    }

    public function cart_remove(Request $request)
    {
        try{
            $rowId = $request->get("id");
            Cart::remove($rowId);

            //return view($this->frontendPagePath . 'filter/cart_mini');

            return response()->json([
                'success' => true,
                'message' => 'Successfully removed from cart ',
                'count' => Cart::count(),
                'subTotal' => Cart::subtotal(),
                'view' => view('components.cart.cart_list')->render(),
                'view2' => view('components.cart.cart_nav')->render(),
                'newItemCount' => Cart::count()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong'
            ]);
        }
        // return back()->with('success', 'Item removed from cart');
    }

    public function cart_update(Request $request)
    {
        try{
            $ids = $request->id;
            $quantities  = $request->quantity;
            if (empty($ids) || empty($quantities) || count($ids) !== count($quantities)) {
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? 'Invalid request data' : 'Something went wrong',
                ]);
            }
            $failedItems = [];
            foreach($ids as $index => $rowId){
                $cartItem = Cart::get($rowId);
                if (!$cartItem) {
                    $failedItems[] = "An item in your cart was not found or has been removed";
                    continue;
                }
                $qty = intval($quantities[$index]);
                if ($qty < 1) {
                    $failedItems[] = "Invalid quantity for item {$cartItem->name}. Quantity must be at least 1.";
                    continue;
                }
                $stockAvailable = $cartItem->options->stock ?? 0;

                if ($stockAvailable >= $qty) {
                    Cart::update($rowId, $qty);
                } else {
                    $failedItems[] = "Stock not sufficient for item {$cartItem->name}.";
                }
            }
            if (count($failedItems) > 10) {
                $failedItems = array_slice($failedItems, 0, 10);
                $failedItems[] = 'More errors omitted...';
            }

            if (count($failedItems) > 0) {
                return response()->json([
                    'error' => true,
                    'message' => $failedItems,
                    'count' => Cart::count(),
                    'subTotal' => Cart::subtotal(),
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully',
                'count' => Cart::count(),
                'subTotal' => Cart::subtotal(),
                'view' => view('components.cart.cart_list')->render(),
                'view2' => view('components.cart.cart_nav')->render(),
                'newItemCount' => Cart::count()
            ]);
        }catch(Exception $e){
            Log::error("Cart update failed: " .$e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong'
            ]);
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
            if (Auth::check()) {
                $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
                $order = Auth::user()->orders;
                return view('frontend/pages/account-wishlist', compact('wishlist', 'order'));
            } else {
                return back()->with('error', 'Please login first');
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
        } else {
            return back()->with('error', 'Please login first');
        }
    }


    public function delete_wishlist(Request $request)
    {
        $find = Wishlist::findorfail($request->id);
        $find->delete();
        return back()->with('success', 'Item removed from wishlist');
    }
}
