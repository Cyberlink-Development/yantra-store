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
        $data = Product::where('slug', $request->slug)->first();
        $data->load([
            'images' => function($query){
                $query->orderByDesc('is_main');
            },
            'reviews' => function($query){
                $query->active()->latest();
            }
        ]);
        $relatedProducts = $data->categories()->first()->products()->active()->where('products.id','!=',$data->id)->with(['reviews' => function($query){
            $query->active();
        },'images'])->latest()->take(5)->get();
        return view($this->frontendPagePath . 'product-single', compact('data', 'relatedProducts'));
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
