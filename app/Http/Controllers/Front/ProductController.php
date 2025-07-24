<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Review;
use App\Model\Quotation;
use App\Model\Configuration;
use Illuminate\Support\Facades\Validator;
use App\Mail\QuotationMail;
use Illuminate\Support\Facades\Mail;


class ProductController extends FrontController
{
     public function product_details(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
        $related_products = Product::join('product_categories', 'product_categories.product_id', '=', 'products.id')
                                ->whereIn('product_categories.category_id', $product->categories->pluck('id'))
                                ->select('products.*')->get();

        $related_products = $related_products->except($product->id);
        // dd($product);
        $count = $product->reviews->where('show', 1)->count();
        $fivestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 5)->where('show', 1)->get();
        $fourstar = Review::where('product_id', '=', $product->id)->where('rating', '=', 4)->where('show', 1)->get();
        $threestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 3)->where('show', 1)->get();
        $twostar = Review::where('product_id', '=', $product->id)->where('rating', '=', 2)->where('show', 1)->get();
        $onestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 1)->where('show', 1)->get();
        $allreviews = Review::where('product_id', $product->id)->where('show', 1)->orderBy('created_at', 'DESC')->get();
        if ($count != 0) {
            $total = 5 * count($fivestar) + 4 * count($fourstar) + 3 * count($threestar) + 2 * count($twostar) + 1 * count($onestar);
            $total_review = count($fivestar) + count($fourstar) + count($threestar) + count($twostar) + count($onestar);
            $average = $total / $total_review;
        }else{
            $average=0;
        }
        return view($this->frontendPagePath . 'product-single', compact('product', 'related_products', 'count', 'fivestar', 'fourstar', 'threestar', 'twostar', 'onestar', 'average', 'allreviews'));
    }

    public function product_stock(){
        $product = Product::find($_GET['id']);
        return $product->totalStock($_GET['color_id'], $_GET['size_id']);
    }

    public function product_search(Request $request){

        $key = $request->get('key');

        $query = Product::query()
        ->where('product_name', 'LIKE', "%{$key}%")
        ->orWhere('short_description', 'LIKE', "%{$key}%")
        ->orWhere('long_description', 'LIKE', "%{$key}%");

        if ($request->has('value')) {
            if ($request->value == 'recent') {
                $query->orderby('products.updated_at', 'desc');
            }
            if ($request->value == 'low_to_high') {
                $query->orderby('products.price', 'asc');
            }
            if ($request->value == 'high_to_low') {
                $query->orderby('products.price', 'desc');
            }
            if ($request->value == 'a_to_z') {
                $query->orderby('products.product_name', 'asc');
            }
            if ($request->value == 'z_to_a') {
                $query->orderby('products.product_name', 'desc');
            }
            if ($request->value == 'older') {
                $query->orderby('products.updated_at', 'asc');
            }

            /*switch($request->value){
                case 'recent':
                    $query->orderby('products.updated_at', 'desc');
                    break;

                case 'low_to_high':
                    $query->orderby('products.price', 'asc');
                    break;

                case 'high_to_low':
                    $query->orderby('products.price', 'desc');
                    break;

                case 'a_to_z':
                    $query->orderby('products.product_name', 'asc');
                    break;

                case 'z_to_a':
                    $query->orderby('products.product_name', 'desc');
                    break;

                case 'older':
                    $query->orderby('products.updated_at', 'asc');
                    break;
            }*/

            $products = $query->get();

            return view($this->frontendPagePath . 'filter/search_filter', compact('products', 'key'));
        }

        //$products = $products->paginate(8);
        $products = $query->get();

        return view($this->frontendPagePath. 'search-list', compact('products', 'key'));
    }

    public function quotation_submit(Request $request){
        $validator = Validator::make($request->all(), [
            "full_name"=>"required",
            "email"=>"required|email",
            "message"=>"required",
            "country"=>"required"
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }

        // Add quotation to database
        $data["full_name"] = $request->full_name;
        $data["email"] = $request->email;
        $data["message"] = $request->message;
        $data["country"] = $request->country;
        $data["phone"] = $request->phone;
        $data["product_id"]=$request->product_id;

        $quotation = Quotation::create($data);

        // Send email
        $email = Configuration::where('configuration_key', 'email')->pluck('configuration_value')->first();
        
        /* Production code for sending mail*/
        //Mail::send(new QuotationMail($quotation, $email));

        /*Code for testing in development*/
        //return new QuotationMail($quotation, $email);

        return response()->json(["success"=>"Quotation Successfully sent"]);
    }
}
