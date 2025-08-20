<?php

namespace App\Http\Controllers\Front;

use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use App\Model\Size;
use Illuminate\Http\Request;

class SearchController extends FrontController
{
    public function search_results(Request $request)
    {
        if($request->has('search') && !$request->filled('search')){
            return $request->ajax()
                ? response()->json(['error' => true, 'message' => 'Search parameter cannot be null'])
                : redirect()->back()->with(['error' => true, 'message' => 'Search parameter cannot be null']);
        }
        if($request->has('uri') && !$request->filled('uri')){
            return $request->ajax()
                ? response()->json(['error' => true, 'message' => 'Invalid request'])
                : redirect()->back()->with(['error' => true, 'message' => 'Invalid request']);
        }
        if($request->has('sort') && !$request->filled('sort')) {
            return $request->ajax()
                ? response()->json(['error' => true, 'message' => 'Sort parameter cannot be empty'])
                : redirect()->back()->with(['error' => true, 'message' => 'Sort parameter cannot be empty']);
        }
        $query = Product::active();
        $uri = $request->input('uri', '');
        $parts = explode('-', $uri, 2);
        $mainUri = $parts[0] ?? null;
        $extra   = $parts[1] ?? null;
        if ($mainUri && !$this->validateUri($mainUri)) {
            return $request->ajax()
                ? response()->json(['error' => true, 'message' => 'Invalid product request'])
                : redirect()->back()->with(['error' => true, 'message' => 'Invalid product request']);
        }
        if ($mainUri === 'brands') {
            if (!$extra) {
                return $request->ajax()
                    ? response()->json(['error' => true, 'message' => 'Brand not specified'])
                    : redirect()->back()->with(['error' => true, 'message' => 'Brand not specified']);
            }else{
                if(!$this->validateBrand($extra)){
                    return $request->ajax()
                    ? response()->json(['error' => true, 'message' => 'Invalid brands'])
                    : redirect()->back()->with(['error' => true, 'message' => 'Invalid brands']);
                }
            }
            $title = ucfirst($extra) . ' Products';
        } elseif($request->has('search')){
            $title = 'Search result - ' . ucwords($request->search);
        } else {
            $title = $uri ? ucwords($uri) . ' Products' : 'Products';
        }
        if($request->has('search')){
            $query = $query->whereRaw("LOWER(product_name) LIKE ?",['%'.strtolower($request->search).'%']);
        }

        $this->applyUriFilter($query, $mainUri, $extra);

        $sort = $request->input('sort', 'latest');
        if (!$this->validateSort($sort)) {
            return $request->ajax()
            ? response()->json(['error' => true, 'message' => 'Invalid sorting type'])
            : redirect()->back()->with(['error' => true, 'message' => 'Invalid sorting type']);
        }
        $this->applySorting($query, $sort);
        $products = $query->paginate(12)->appends($request->query());

        if ($request->has('page') && $request->page > $products->lastPage()) {
            return redirect()->route('search.results', ['search' => $request->search])->with([
                'info' => true,
                'message' => 'Invalid page request'
            ]);
        }
        if($request->ajax()){
            $message = null;
            $page = true;
            $action = $request->input('action');
            if($request->has('sort') && !$request->has('page')){
                $message = "Product sorted successfully";
                $page = false;
            }
            return response()->json([
                'success' => true,
                'message' => $message,
                'view' => view('components.product.product_list',['products'=>$products,'title' => $title])->render(),
                'page' => $page
            ]);
        }
        return view('frontend.pages.result',compact('title','products'));
    }

    private function validateUri(string $uri)
    {
        $validUris = ['latest','features','brands','productsForYou'];
        return in_array($uri, $validUris);
    }
    private function validateBrand(string $brand)
    {
        $brands = Brand::active()->pluck('slug')->toArray();
        return in_array($brand, $brands);
    }

    private function validateSort(string $sort)
    {
        $validSorts = ['latest', 'low-to-high', 'high-to-low', 'a-z', 'z-a'];
        return in_array($sort, $validSorts);
    }

    private function applyUriFilter($query,$uri,$extra = null){
        switch($uri){
            case 'latest':
                $query->where('latest','1');
                break;
            case 'features':
                $query->where('is_featured','1');
                break;
            case 'brands':
                $query->whereHas('brands', function($q) use ($extra){
                    $q->where('slug', $extra);
                });
                break;
            case 'productsForYou':
                $query->where('is_popular','popular');
                break;
            default:
                $query->latest();
        }
    }

    private function applySorting($query,$sort){
        \Log::info('Applying sort: ' . $sort);
        switch($sort){
            case 'latest':
                $query->latest();
                break;
            case 'low-to-high':
                $query->reorder();
                $query->where(function($q) {
                    $q->whereNotNull('price')
                    ->where('price', '>', 0)
                    ->orWhere(function($q2) {
                        $q2->whereNotNull('discount_price')
                            ->where('discount_price', '>', 0);
                    });
                });
                $query->orderByRaw("CASE WHEN discount_price IS NULL OR discount_price = 0 OR discount_price = '' THEN price ELSE discount_price END ASC");
                break;
            case 'high-to-low':
                $query->reorder();
                $query->where(function($q){
                    $q->whereNotNull('price')
                    ->where('price','>',0)
                    ->orWhere(function($q2){
                        $q2->whereNotNull('discount_price')
                        ->where('discount_price','>',0);
                    });
                });
                $query->orderByRaw("CASE WHEN discount_price IS NULL OR discount_price = 0 OR discount_price = '' THEN price ELSE discount_price END DESC");
                break;
            case 'a-z':
                $query->reorder();
                $query->orderBy('product_name', 'ASC');
                break;
            case 'z-a':
                $query->reorder();
                $query->orderBy('product_name', 'DESC');
                break;
            default:
                $query->latest();
        }
    }

}
