<?php

namespace App\Http\Controllers\Front;

use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use App\Model\Review;
use App\Model\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Session;
use Illuminate\Support\Facades\DB;


class CategoryController extends FrontController
{
    public function product_details(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
        $count = $product->reviews->count();
        $fivestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 5)->get();
        $fourstar = Review::where('product_id', '=', $product->id)->where('rating', '=', 4)->get();
        $threestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 3)->get();
        $twostar = Review::where('product_id', '=', $product->id)->where('rating', '=', 2)->get();
        $onestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 1)->get();
        if ($count != 0) {
            $total = 5 * count($fivestar) + 4 * count($fourstar) + 3 * count($threestar) + 2 * count($twostar) + 1 * count($onestar);
            $total_review = count($fivestar) + count($fourstar) + count($threestar) + count($twostar) + count($onestar);
            $average = $total / $total_review;
        }else{
            $average=0;
        }

        return view($this->frontendPagePath . 'product-details', compact('product',  'count', 'fivestar', 'fourstar', 'threestar', 'twostar', 'onestar', 'average'));
    }

    public function product_list(Request $request)
    {
        $category = Category::where('slug', $request->slug)->active()->first();
        if(!$category){
            return $request->ajax()
            ? response()->json(['error' => true, 'message' => 'Category not found'])
            : redirect()->back()->with(['error' => true, 'message' => 'Category not found']);
        }
        $categoryIds = getAllCategoryChildrenIds($category);
        $query = Product::whereHas('categories', function($q) use ($categoryIds){
            $q->whereIn('categories.id',$categoryIds);
        })->active();

        // Apply filters (also do the validation for filters if possible)
        // $filtersRaw = $request->input('filterby', '');
        // if (!$this->validateFilters($filtersRaw)) {
        //     return $request->ajax()
        //     ? response()->json(['error' => true, 'message' => 'Invalid filter parameters'])
        //     : redirect()->back()->with(['error' => true, 'message' => 'Invalid filter parameters']);
        // }
        $this->applyFilters($query, $request);


        $sort = $request->input('sort', 'latest');
        if (!$this->validateSort($sort)) {
            return $request->ajax()
            ? response()->json(['error' => true, 'message' => 'Invalid sorting type'])
            : redirect()->back()->with(['error' => true, 'message' => 'Invalid sorting type']);
        }
        $this->applySorting($query, $sort);

        $products = $query->paginate(12)->appends($request->query());
        $maxPrice = $query->max('price');

        if ($request->has('page') && $request->page > $products->lastPage()) {
            return redirect()->route('product-list', ['slug' => $category->slug])->with([
                'info' => true,
                'message' => 'Invalid page request'
            ]);
        }
        if($request->ajax()){
            $message = null;
            $page = true;
            $action = $request->input('action');
            if($request->has('sort') && !$request->has('page') && $action === 'sort'){
                $message = "Product sorted successfully";
                $page = false;
            }
            if(($request->has('filterby') || $request->has('minPrice') || $request->has('maxPrice')) && !$request->has('page') && $action === 'filter'){
                $message = "Product filtered successfully";
                $page = false;
            }
            return response()->json([
                'success' => true,
                'message' => $message,
                'view' => view('components.product.product_list',['products'=>$products,'maxPrice' => $maxPrice])->render(),
                'page' => $page
            ]);
        }
        return view($this->frontendPagePath . 'product-list', compact( 'category', 'products','maxPrice'));
    }

    public function brand_list(Request $request)
    {
        $brands = Brand::where('slug', $request->slug)->first();
        $brand_products = $brands->products;
        $size = Size::all();
        $brand = Brand::all();
        $brand_slug = $request->slug;
        if ($request->ajax()) {
            if ($request->slug) {

                $brand_id = Brand::where('slug', $request->slug)->first();
                $query = Product::where('brand_id', $brand_id->id);

                if ($request->has('min_price') || $request->has('max_price')) {
                    $max_price = (int)$request->max_price;
                    $min_price = (int)$request->min_price;
                    $query->whereBetween('products.price', [$min_price, $max_price]);
                }

                if ($request->has('brand')) {
                    $brand = $request->brand;
                    $query->join('brands', 'brands.id', '=', 'products.brand_id')->whereIn('brands.id', $brand);
                }
                if ($request->has('size')) {
                    $query->join('stocks', 'stocks.product_id', '=', 'products.id')
                        ->whereIn('stocks.size_id', $request->size)
                        ->select('products.*')
                        ->distinct();
                }
                if ($request->has('value')) {
                    if ($request->value == 'new') {
                        $query->orderby('products.created_at', 'desc');
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
                    if ($request->value == 'popular') {
                        $query->where('products.is_popular', '=', 'popular');
                    }
                }

                $products = $query->select('products.*')->get();

                return view($this->frontendPagePath . 'filter/product_filter', compact('products'));
            }

        }
        return view($this->frontendPagePath . 'brand_product_list', compact('brands', 'brand_slug', 'brand_products', 'size', 'brand'));
    }

    public function popular_products(Request $request)
    {
        $popular = Product::where('is_popular', 'popular')->get();
        $size = Size::all();
        $brand = Brand::all();
        if ($request->ajax()) {
            $query = Product::where('is_popular', 'popular');


            if ($request->has('value')) {
                if ($request->value == 'new') {
                    $query->orderby('products.created_at', 'desc');
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
                if ($request->value == 'popular') {
                    $query->where('products.is_popular', '=', 'popular');
                }
            }

            $products = $query->select('products.*')->where('products.status', '=', 1)
                ->distinct()->get();

            return view($this->frontendPagePath . 'filter/product_filter', compact('products'));
        }


        return view($this->frontendPagePath . 'popular_products', compact('size', 'brand', 'popular'));

    }

    private function applySorting($query,$sort){
        switch($sort){
            case 'latest':
                $query->latest();
                break;
            case 'low-to-high':
                $query->orderByRaw("CASE WHEN discount_price IS NULL  OR discount_price = 0 OR discount_price = '' THEN price ELSE discount_price END ASC");
                break;
            case 'high-to-low':
                $query->orderByRaw("CASE WHEN discount_price IS NULL  OR discount_price = 0 OR discount_price = '' THEN price ELSE discount_price END DESC");
                break;
            case 'a-z':
                $query->orderby('product_name','asc');
                break;
            case 'z-a':
                $query->orderby('product_name','desc');
                break;
            default:
                $query->latest();
        }
    }

    private function applyFilters($query, Request $request)
    {
        $filtersRaw = $request->input('filterby', '');
        // if ($filtersRaw) {
        //     $filterGroups = explode(';', $filtersRaw);

        //     foreach ($filterGroups as $group) {
        //         [$category, $values] = explode(':', $group);
        //         $valuesArray = explode(',', $values);

        //         // Example: filter brand
        //         if ($category === 'brand') {
        //             $query->whereIn('brand', $valuesArray);
        //         }
        //         // Example: filter color
        //         if ($category === 'color') {
        //             $query->whereIn('color', $valuesArray);
        //         }
        //     }
        // }

        // Handle price
        if ($request->filled('minPrice')) {
            $query->where('price', '>=', $request->minPrice);
        }
        if ($request->filled('maxPrice')) {
            $query->where('price', '<=', $request->maxPrice);
        }
    }

    private function validateSort(string $sort)
    {
        $validSorts = ['latest', 'low-to-high', 'high-to-low', 'a-z', 'z-a'];
        return in_array($sort, $validSorts);
    }

    private function validateFilters(string $filtersRaw)
    {
        if (!$filtersRaw) {
            return true;
        }
        $filterGroups = explode(';', $filtersRaw);
        foreach ($filterGroups as $group) {
            $parts = explode(':', $group);
            if (count($parts) !== 2) {
                return false; // invalid format
            }
            [$category, $values] = $parts;
            $valuesArray = explode(',', $values);

            // Check if category exists
            $categoryRecord = DB::table('filter_categories')->where('name', $category)->first();
            if (!$categoryRecord) {
                return false; // invalid category
            }
            // Check each value exists for the category
            $validValuesCount = DB::table('filter_values')
                ->where('filter_category_id', $categoryRecord->id)
                ->whereIn('value', $valuesArray)
                ->count();
            if ($validValuesCount !== count($valuesArray)) {
                return false; // one or more invalid values
            }
        }
        return true; // all valid
    }

}
