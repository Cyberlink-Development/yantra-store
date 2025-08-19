<?php

namespace App\Http\Controllers\Admin;

use App\Model\Brand;
use App\Model\Color;
use App\Model\ComponentType;
use App\Model\Image;
use App\Model\Product;
use App\Model\Size;
use App\Model\Stock;
use App\Model\Description;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\OrderDetail;
use App\Model\Wishlist;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;



class ProductController extends BackendController
{
    protected $category;

    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $products = Product::orderby('created_at', 'DESC')->get();
        $img = new Product();
        return view($this->backendproductPath . 'index', compact('products', 'img'));
    }

    public function create(Request $request)
    {
        $pro = Product::all();
        $size = Size::all();
        $brand = Brand::all();
        $color = Color::all();
        $comp_type = ComponentType::all();
        // dd($comp_type);
        return view($this->backendproductPath . 'create', compact('size', 'brand', 'color','comp_type'));

    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            // dd($request->all());
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|unique:products,product_name',
                // 'price' => 'required|numeric',
                // 'selling_price' => 'required|numeric',
                'description' => 'required',
                'category' => 'required',
                // 'size_type' => 'required',
                // 'is_special' => 'required',
                // 'on_sale' => 'required',
                // 'is_featured' => 'required',
                // 'is_popular' => 'required',
                'image' => 'required',
                // 'weight' => 'required',
            ]);
            
            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()->all()
                ]);
            }

            try {
                $product = new Product();
                $product->product_name = $request->product_name;
                $product->price = $request->price;
                $product->stock = $request->stock;
                $product->discount_price = $request->selling_price;
                $product->wholesale_price = $request->wholesale_price;
                $product->short_description = $request->description;
                $product->long_description = $request->long_description;
                $product->status = $request->status;
                $product->is_featured = $request->has('is_featured') ? 1 : 0;
                $product->latest = $request->has('latest') ? 1 : 0;
                $product->hot = $request->has('hot') ? 1 : 0;
                $product->is_popular = $request->is_popular;
                $product->is_special = $request->is_special;
                $product->on_sale = $request->on_sale;
                $product->sku = $request->sku;
                $product->weight = $request->weight;
                $product->video = $request->video;
                $product->brand_id = $request->brand;
                $product->model_name = $request->model_name;
                $product->component_type = $request->component_type;
                $product->size_variation = $request->size_type;
                if ($request->hasFile('audio')) {
                    $image = $request->file('audio');
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/audio/');

                    $image->move($destinationPath, $name);
                    $product['audio'] = $name;
                }
                $product->save();
                $product->categories()->attach($request->category);
                if ($request->size_type == 0) {
                    if (isset($request->free_size_color)) {
                        for ($i = 0; $i < count($request->free_size_color); $i++) {
                            $existing_stock = DB::table('color_stocks')
                                        ->where('product_id', $product->id)
                                        ->where('color_id', $request->free_size_color[$i])
                                        ->first();
                            if($existing_stock){
                                $new_stock = $existing_stock->stock + $request->color_stocks[$i];
                                DB::table('color_stocks')
                                    ->where('id', $existing_stock->id)
                                    ->limit(1)
                                    ->update(array('stock' => $new_stock));
                            }else{
                                $product->colorstocks()->attach($request->free_size_color[$i], ['stock' => $request->color_stocks[$i]]);
                            }
                        }

                    }

                    $product->save();
                } else {
                    if (isset($request->size)) {
                        $keys = array_keys($request->size);

                        foreach ($keys as $key) {
                            $existing_stock = Stock::where('product_id', $product->id)
                                            ->where('size_id', $request->size[$key])
                                            ->where('color_id', $request->color[$key])
                                            ->first();
                            if($existing_stock){
                                $existing_stock->stock = $existing_stock->stock + $request->size_stocks[$key];
                                $existing_stock->save();
                            }else{
                                $stock = new Stock();
                                $stock->product_id = $product->id;
                                $stock->size_id = $request->size[$key];
                                $stock->color_id = $request->color[$key];
                                $stock->stock = $request->size_stocks[$key];
                                $stock->save();
                            }
                        }
                    }
                }
                if (($request->seo_keyword) && ($request->seo_description)) {
                    $product->seo()->create([
                        'seo_keyword' => $request->seo_keyword,
                        'seo_description' => $request->seo_description,
                    ]);
                }

                if (isset($request->title)) {
                    $title = $request->title;
                    $specification = $request->description1;
                    $keys = array_keys($title);
                    foreach ($keys as $key) {
                        $product->descriptions()->create([
                            'title' => $title[$key],
                            'description' => $specification[$key],
                        ]);
                    }

                }

                if ($request->hasFile('image')) {
                    $counter = 1;
                    foreach ($request->file('image') as $image) {
                        $picture = new Image();
                        $filename = time() . rand(100, 999) . '.' . $image->getClientOriginalExtension();
                        $upload_path = base_path('/public/images/products/');
                        $db_filename = $upload_path . $filename;
                        $image->move($upload_path, $filename);
                        $picture->image = $filename;
                        $picture->product_id = $product->id;

                        if ($request->is_main == $counter || count($request->file('image'))) {
                            $picture->is_main = '1';
                        } else {
                            $picture->is_main = '0';
                        }
                        $counter = $counter + 1;

                        $picture->save();
                    }
                }

            } catch (Exception $e) {
                Log::error($e->getMessage());
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
                ]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Product Added Successfully'
            ]);
        }
    }

    public function show_product(Request $request)
    {

        $product = Product::where('slug', '=', $request->slug)->first();

        return view($this->backendproductPath . 'single_product', compact('product'));
    }

    public function edit(Request $request){
        $product = Product::where('id', '=', $request->id)->first();
        $size = Size::all();
        $brand = Brand::all();
        $color = Color::all();
        $category=Category::all();
        $comp_type = ComponentType::all();
        return view($this->backendproductPath . 'edit', compact('category','product', 'size', 'brand', 'color','comp_type'));
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|unique:products,product_name,' . $request->id,
                // 'price' => 'required',
                // 'selling_price' => 'required',
                'description' => 'required',
                'category' => 'required',
                // 'weight' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors()->all()
                ]);
            }
            try{
                $product = Product::findorfail($request->id);
                $product->product_name = $request->product_name;      
                $product->price = $request->price;
                $product->stock = $request->stock;
                $product->discount_price = $request->selling_price;
                $product->short_description = $request->short_description;
                $product->long_description = $request->long_description;
                $product->status = $request->status;
                $product->is_featured = $request->has('is_featured') ? 1 : 0;
                $product->latest = $request->has('latest') ? 1 : 0;
                $product->hot = $request->has('hot') ? 1 : 0;
                $product->is_popular = $request->is_popular;
                $product->is_special = $request->is_special;
                $product->on_sale = $request->on_sale;
                $product->sku = $request->sku;
                $product->video = $request->video;
                $product->brand_id = $request->brand;
                $product->model_name = $request->model_name;
                $product->component_type = $request->component_type;
                // $product->size_variation = $request->size_variation;
                $product->weight = $request->weight;
                if ($request->hasFile('audio')) {
                    $this->delete_file($request->id);
                    $image = $request->file('audio');
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/audio/');

                    $image->move($destinationPath, $name);
                    $product['audio'] = $name;
                }
                $product->save();
                //  category pivot table ma
                $product->categories()->sync($request->category);
                //color stock pivot table
                if ($product->size_variation == 0) {
                    if (isset($request->free_size_color)) {
                        for ($i = 0; $i < count($request->free_size_color); $i++) {
                            $save = DB::table('color_stocks')->updateOrInsert(['product_id' => $product->id, 'color_id' => $request->free_size_color[$i]], ['stock' => $request->color_stocks[$i]]);
                            //$product->colorstocks()->sync([$request->free_size_color[$i] => ['stock' => $request->color_stocks[$i]]]);
                        }
                    }
                    $product->save();
                } else {
                    // size stock insert pivot table//
                    //dd($request->size);
                    if (isset($request->size)) {
                        //dd($request->size_stocks);
                        for ($key = 0; $key < count($request->size); $key++) {
                            $existing_stock = Stock::where('product_id', $product->id)
                                            ->where('size_id', $request->size[$key])
                                            ->where('color_id', $request->color[$key])
                                            ->first();
                            if($existing_stock){
                                $existing_stock->stock = $request->size_stocks[$key];
                                $existing_stock->save();
                            }else{
                                $stock = new Stock();
                                $stock->product_id = $product->id;
                                $stock->size_id = $request->size[$key];
                                $stock->color_id = $request->color[$key];
                                $stock->stock = $request->size_stocks[$key];
                                $stock->save();
                            }
                        }
                    }
                }
                //specifications table ma gayo from product controller
                if (isset($request->title)) {
                    $title = $request->title['title'];
                    $description = $request->description['desc'];
                    $keys = array_keys($title);
                    foreach ($keys as $key) {
                        $product->descriptions()->updateorcreate(['product_id' => $request->id, 'id' => $key], [
                            'title' => $title[$key],
                            'description' => $description[$key]
                        ]);
                    }

                }
                //insertion to image database
                if ($request->hasFile('image')) {
                    $counter = 1;
                    foreach ($request->file('image') as $image) {
                        $picture = new Image();
                        $filename = time() . rand(100, 999) . '.' . $image->getClientOriginalExtension();
                        $upload_path = base_path('/public/images/products/');
                        $db_filename = $upload_path . $filename;
                        $image->move($upload_path, $filename);
                        $picture->image = $filename;
                        $picture->product_id = $product->id;

                        if ($request->is_main == $counter) {
                            $picture->is_main = '1';
                        } else {
                            $picture->is_main = '0';
                        }
                        $counter = $counter + 1;

                        $picture->save();
                    }
                }

                if(($request->seo_keyword) || ( $request->seo_description)) {
                    if($product->seo==null){
                        $product->seo()->create([
                            'seo_keyword' => $request->seo_keyword,
                            'seo_description' => $request->seo_description,
                        ]);
                    }else{
                        $product->seo()->update([
                            'seo_keyword' => $request->seo_keyword,
                            'seo_description' => $request->seo_description,
                        ]);
                    }
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Product Updated Successfully'
                ]);

            }catch (Exception $e) {
                Log::error($e->getMessage());
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
                ]);
            }
        }else{
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? 'Invalid request type. Expected ajax reqeust' : 'Something went wrong. Please try again.'
            ]);
        }
    }

   public function delete_file($id)
   {
       $findData = Product::findorfail($id);
       $fileName = $findData->audio;
       $deletePath = public_path('audio/' . $fileName);
       if (file_exists($deletePath) && is_file($deletePath)) {
           unlink($deletePath);
       }
       return true;
   }

    public function delete_description($id){
        $desc = Description::find($id);
        $desc->delete();

        return response()->json(['status' => 'success', 'message' => 'Description deleted successfully']);
    }

    public function delete_product(Request $request)
    {
        $id = $request->id;
        $product = Product::findorfail($id);
        $productOrder = OrderDetail::where('product_id', $product->id)->first();
        $productWishlist = Wishlist::where('product_id', $product->id)->first();
        if($productWishlist){
            return back()->with('error', 'This product is placed in wishlist.');
        }
        if($productOrder){
            return back()->with('error', 'This product is placed as order.');
        }
        if($product->images)
        {
        foreach ($product->images as $image) {
            $filename = $image->image;
            $deletePath = public_path('images/products/' . $image);
            if (file_exists($deletePath) && is_file($deletePath)) {
                unlink($deletePath);
            }
            $image->delete();
        }
        }

        $product->seo()->delete();
        $product->reviews()->delete();
        $product->categories()->detach();
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }


    public function change_main($id)
    {
        $change = Image::findOrFail($id);
        $images = Image::where('product_id', $change->product_id)->get();
        foreach ($images as $image) {
            if ($image->id == $change->id) {
                $image->is_main = 1;
            } else {
                $image->is_main = 0;
            }
            $image->save();
        }
        return response()->json(['status' => 'success', 'message' => 'Main image changed successfully']);
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);
        if($image->products->images->count()<=1){
            return response()->json(['status' => 'error', 'message' => 'You cannot delete the image!']);
        }
         $filename = $image->image;
         $deletePath = public_path('images/products/' . $filename);
               if (file_exists($deletePath) && is_file($deletePath)) {
                unlink($deletePath);
            }
        // unlink(public_path() . '/images/products/' . $filename);
        $image->delete();
        $images = Image::where('product_id', $image->product_id)->first()->update(['is_main' => 1]);
        return response()->json(['status' => 'success', 'message' => 'Image has been deleted successfully!']);

    }


}
