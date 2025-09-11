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
        $brands = Brand::all();
        $color = Color::all();
        $comp_type = ComponentType::all();
        $categories = Category::with('children')->where('parent_id', 0)->where('status', 1)->get();
        return view($this->backendproductPath . 'create', compact('size', 'brands', 'color','comp_type','categories'));
    }

    public function store(Request $request)
    {
        $isAjax = $request->ajax();
        try{
            $request->validate([
                'product_name' => 'required|unique:products,product_name',
                'price' => 'numeric|nullable',
                'discount_price' => 'numeric|nullable',
                'long_description' => 'string|nullable',
                'short_description' => 'string|nullable',
                'category' => 'required|exists:categories,id',
                'image' => 'required|array|min:1',
                'image.*' => 'mimes:jpg,png,jpeg,webp,gif|max:2048',
            ]);
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->discount_price = $request->discount_price;
            $product->wholesale_price = $request->wholesale_price;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->status = $request->has('status') ? 1: 0;
            $product->is_featured = $request->has('is_featured') ? 1 : 0;
            $product->latest = $request->has('latest') ? 1 : 0;
            $product->hot = $request->has('hot') ? 1 : 0;
            $product->is_popular = $request->has('is_popular') ? 'popular' : 'notpopular';
            $product->is_special = $request->has('is_special') ? 1 : 0;
            $product->on_sale = $request->has('on_sale') ? 1 : 0;
            $product->sku = $request->sku;
            $product->weight = $request->weight;
            $product->video = $request->video;
            $product->brand_id = $request->brand_id;
            $product->model_name = $request->model_name;
            $product->component_type = $request->component_type;
            $product->size_variation = $request->size_type;
            if ($request->hasFile('audio')) {
                $audio = $request->file('audio');
                $name = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = public_path('/audio/');
                $audio->move($destinationPath, $name);
                $product['audio'] = $name;
            }
            $product->save();
            $product->categories()->sync($request->category);
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
            if (($request->meta_title) && ($request->meta_description)) {
                $product->seo()->create([
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
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
                    $upload_path = public_path('images/products/');
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
            return $isAjax ? response()->json([
                'success' => true,
                'message' => 'Product Added Successfully'
            ]) : redirect()->back()->with([
                'success' => true,
                'message' => 'Product Added Successfully'
            ]);
        }catch(ValidationException $e){
            return $isAjax
                ? response()->json(['error' => true,'message' => $e->validator->errors()->all()])
                : redirect()->back()->with(['error' => true,'message' => $e->validator->errors()->all()]);
        }catch (Exception $e) {
            Log::error($e->getMessage());
            return $isAjax
            ? response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]) : redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function show_product(Request $request)
    {

        $product = Product::where('slug', '=', $request->slug)->first();

        return view($this->backendproductPath . 'single_product', compact('product'));
    }
    public function edit(Request $request){
        $data = Product::where('id', '=', $request->id)->first();
        $size = Size::all();
        $brands = Brand::all();
        $color = Color::all();
        $comp_type = ComponentType::all();
        $categories = Category::with('children')->where('parent_id', 0)->where('status', 1)->get();
        $assignedCategories = $data->categories->pluck('id')->toArray();
        return view($this->backendproductPath . 'edit', compact('data', 'size', 'brands', 'color','comp_type','categories','assignedCategories'));
    }

    public function update(Request $request)
    {
        $isAjax = $request->ajax();
        try{
            $request->validate([
                'product_name' => 'required|unique:products,product_name,' . $request->id,
                'price' => 'numeric|nullable',
                'discount_price' => 'numeric|nullable',
                'long_description' => 'string|nullable',
                'short_description' => 'string|nullable',
                'category' => 'required|exists:categories,id',
                // 'image' => 'required|array|min:1',
                'image.*' => 'mimes:jpg,png,jpeg,webp,gif|max:2048',
            ]);
            $product = Product::findorfail($request->id);
            $product->product_name = $request->product_name;
            $product->price = $request->price;
            $product->discount_price = $request->discount_price;
            $product->stock = $request->stock;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->status = $request->has('status') ? 1: 0;
            $product->is_featured = $request->has('is_featured') ? 1 : 0;
            $product->latest = $request->has('latest') ? 1 : 0;
            $product->hot = $request->has('hot') ? 1 : 0;
            $product->is_popular = $request->has('is_popular') ? 'popular' : 'notpopular';
            $product->is_special = $request->has('is_special') ? 1 : 0;
            $product->on_sale = $request->has('on_sale') ? 1 : 0;
            $product->sku = $request->sku;
            $product->video = $request->video;
            $product->brand_id = $request->brand_id;
            $product->model_name = $request->model_name;
            $product->component_type = $request->component_type;
            $product->weight = $request->weight;
            if ($request->hasFile('audio')) {
                $this->delete_file($request->id);
                $audio = $request->file('audio');
                $name = time() . '.' . $audio->getClientOriginalExtension();
                $destinationPath = public_path('/audio/');
                $audio->move($destinationPath, $name);
                $product['audio'] = $name;
            }
            $product->save();
            $product->categories()->sync($request->category);
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
                if (isset($request->size)) {
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
                    $upload_path = public_path('images/products/');
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
            if(($request->meta_title) || ( $request->meta_description)) {
                if($product->seo==null){
                    $product->seo()->create([
                        'meta_title' => $request->meta_title,
                        'meta_description' => $request->meta_description,
                    ]);
                }else{
                    $product->seo()->update([
                        'meta_title' => $request->meta_title,
                        'meta_description' => $request->meta_description,
                    ]);
                }
            }
            // TODO: COMPATIBILITY CLEANUP


            // // Save the old component type before changing
            // $oldComponentTypeId = $product->component_type;
            // $oldLevel = $product->componentType->level ?? null;

            // $product->component_type = $request->component_type;
            // $product->save();

            // // COMPATIBILITY CLEANUP - ONLY IF COMPONENT TYPE CHANGED
            // if ($oldComponentTypeId != $product->component_type) {
            //     $newLevel = $product->componentType->level ?? null;

            //     // Get all compatibilities involving this product
            //     $compatibilities = \App\Model\ProductCompatibility::where('product_id', $product->id)
            //         ->orWhere('compatible_product_id', $product->id)
            //         ->get();

            //     foreach ($compatibilities as $compatibility) {
            //         // Determine the "other" product in the pair
            //         $otherId = $compatibility->product_id == $product->id
            //             ? $compatibility->compatible_product_id
            //             : $compatibility->product_id;

            //         $otherProduct = \App\Model\Product::find($otherId);
            //         if (!$otherProduct) {
            //             $compatibility->delete();
            //             continue;
            //         }

            //         $otherLevel = $otherProduct->componentType->level ?? null;

            //         // Remove only if the other product is now in the SAME level
            //         if ($otherLevel === $newLevel) {
            //             $compatibility->delete();
            //         }
            //     }
            // }


            return $isAjax ? response()->json([
                'success' => true,
                'message' => 'Product Updated Successfully'
            ]) : redirect()->back()->with([
                'success' => true,
                'message' => 'Product Updated Successfully'
            ]);
        }catch(ValidationException $e){
            return $isAjax
                ? response()->json(['error' => true,'message' => $e->validator->errors()->all()])
                : redirect()->back()->with(['error' => true,'message' => $e->validator->errors()->all()]);
        }catch (Exception $e) {
            Log::error($e->getMessage());
            return $isAjax
            ? response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]) : redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
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
            return redirect()->back()->with([
                'error' => true,
                'message' => 'This product is placed in wishlist.'
            ]);
        }
        if($productOrder){
            return redirect()->back()->with([
                'error' => true,
                'message' => 'This product is placed as order.'
            ]);
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
        return redirect()->back()->with([
            'success' => true,
            'message' => 'Product Deleted Successfully'
        ]);
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
        return response()->json([
            'success' => true,
            'message' => 'Main image changed successfully'
        ]);
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);
        if($image->products->images->count()<=1){
            return response()->json([
                'error' => true,
                'message' => 'You cannot delete the image!'
            ]);
        }
         $filename = $image->image;
         $deletePath = public_path('images/products/' . $filename);
               if (file_exists($deletePath) && is_file($deletePath)) {
                unlink($deletePath);
            }
        // unlink(public_path() . '/images/products/' . $filename);
        $image->delete();
        $images = Image::where('product_id', $image->product_id)->first()->update(['is_main' => 1]);
        return response()->json([
            'success' => true,
            'message' => 'Image has been deleted successfully!'
        ]);

    }


}
