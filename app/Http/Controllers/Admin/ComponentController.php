<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ComponentType;
use App\Model\Product;
use App\Model\ProductCompatibility;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class ComponentController extends BackendController
{
    public function view()
    {
        // dd('test');
        $data = ComponentType::where('status',1)->get();
        return view($this->backendComponentPath.'index',compact('data'));
    }
    public function viewComponent($id)
    {
        $data = Product::where(['status'=> 1 , 'component_type'=>$id])->get();
        // dd($data);
        return view($this->backendComponentPath.'list-component',compact('data','id'));
    }
    public function create($uri, $id)
    {
        $data = Product::where(['status'=> 1 , 'id'=>$id])->first();
        $currentLevel = ComponentType::where('id', $data->component_type)->value('level');
        $component_types = ComponentType::where('status',1)->where('level', '>', $currentLevel)->get();
        $existingCompatibleIds = ProductCompatibility::where(function($q) use ($id) {
                $q->where('product_id', $id)
                ->orWhere('compatible_product_id', $id);
            })
            ->get()
            ->map(function($item) use ($id) {
                // Normalize: get the "other" product ID
                return $item->product_id == $id ? $item->compatible_product_id : $item->product_id;
            })
            ->toArray();

        // dd($data->component_type,$uri); 
        return view($this->backendComponentPath.'create',compact('data','component_types','existingCompatibleIds'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'compatible_products' => 'required|array|min:1',
                'compatible_products.*.*' => 'exists:products,id|different:'.$request->product_id,
            ],[
                'compatible_products.required' => 'Please select at least one product under any component type.',
                'compatible_products.*.*.exists' => 'One of the selected compatible products is invalid.',
                'compatible_products.*.*.different' => 'A product cannot be compatible with itself.',
            ]);

            $productId = (int) $request->product_id;

            $current = ComponentType::findOrFail($request->component_type);
            // Component types shown in the form
            $shownComponentTypeIds = ComponentType::where('level', '>=', $current->level)->pluck('id')->toArray();

            //  Flatten submitted IDs
            $submittedIds = collect($request->compatible_products)
                ->flatten()
                ->map(fn($id) => (int) $id)
                ->unique()
                ->toArray();

            //  Get all product IDs under shown component types
            $shownProductIds = Product::whereIn('component_type', $shownComponentTypeIds)
                ->pluck('id')
                ->toArray();
                
            //  Remove unselected compatibilities for shown component types
            $toRemoveIds = array_diff($shownProductIds, $submittedIds); // only unselected IDs

            // dd($request->all(),'shown component tpes',$shownComponentTypeIds ,'product under shown comp types',$shownProductIds,'to remove',$toRemoveIds,$submittedIds);
            //  Add new compatibilities
            foreach ($submittedIds as $compatibleId) {
                $mainId = min($productId, $compatibleId);
                $otherId = max($productId, $compatibleId);

                $exists = ProductCompatibility::where('product_id', $mainId)
                    ->where('compatible_product_id', $otherId)
                    ->exists();

                if (!$exists) {
                    ProductCompatibility::create([
                        'product_id' => $mainId,
                        'compatible_product_id' => $otherId,
                    ]);
                }
            }

            ProductCompatibility::where(function ($q) use ($productId, $toRemoveIds) {
                foreach ($toRemoveIds as $otherId) {
                    $mainId = min($productId, $otherId);
                    $maxId  = max($productId, $otherId);

                    $q->orWhere(function ($sub) use ($mainId, $maxId) {
                        $sub->where('product_id', $mainId)
                            ->where('compatible_product_id', $maxId);
                    });
                }
            })->delete();

            // foreach ($toRemoveIds as $otherId) {
            //     $mainId = min($productId, $otherId);
            //     $maxId = max($productId, $otherId);

            //     ProductCompatibility::where('product_id', $mainId)
            //         ->where('compatible_product_id', $maxId)
            //         ->delete();
            // }
            
            return redirect()->route('view-component',$request->component_type)->with([
                'success' => true,
                'message' => 'Compatibility updated successfully.'
            ]);
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error('Error while creating ads :-'.$e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function store_old(Request $request)
    {
        // dd($request->all());
        try{
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'compatible_products' => 'required|array|min:1',
                'compatible_products.*.*' => 'exists:products,id|different:'.$request->product_id,
            ],[
                'compatible_products.required' => 'Please select at least one product under any component type.',
                'compatible_products.*.*.exists' => 'One of the selected compatible products is invalid.',
                'compatible_products.*.*.different' => 'A product cannot be compatible with itself.',
            ]);
            
            $productId = $request->product_id;

            if ($request->filled('compatible_products') && is_array($request->compatible_products)) {
                foreach ($request->compatible_products as $componentTypeId => $productIds) {
                    foreach ($productIds as $compatibleId) {
                        
                        $mainId = min($productId, $compatibleId);
                        $otherId = max($productId, $compatibleId);

                        $exists = ProductCompatibility::where('product_id', $mainId)
                            ->where('compatible_product_id', $otherId)
                            ->exists();

                        if (!$exists) {
                            ProductCompatibility::create([
                                'product_id' => $mainId,
                                'compatible_product_id' => $otherId,
                            ]);
                        }
                    }
                }
            }

            return redirect()->route('view-component',$request->component_type)->with([
                'success' => true,
                'message' => 'Compatibility added successfully.'
            ]);
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error('Error while creating ads :-'.$e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
}
