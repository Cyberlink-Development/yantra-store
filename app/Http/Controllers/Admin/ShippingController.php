<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Shipping;
use Illuminate\Http\Request;
use App\ShippingMedium;
use App\Weight;
use App\ShippingPrice;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class ShippingController extends BackendController
{
    public function add_medium(Request $request){
        if ($request->isMethod('get'))
        {
            $shippingmedium=ShippingMedium::all();
            return view($this->backendPagePath . 'shipping/medium',compact('shippingmedium'));

        }

        if($request->isMethod('post')){

            $request->validate([
                "title"=>"required",
            ]);

            ShippingMedium::create([
                "title"=>$request->title,
            ]);
            return back()->with('success','Shipping Medium added');
        }
    }

    public function delete_medium(Request $request)
    {
        $find=ShippingMedium::findorfail($request->id);

        $find->delete();
        return back()->with('success','Shipping Medium deleted');

    }

    public function edit_medium(Request $request)
    {
        $request->validate([
            "title"=>"required",
        ]);

        $id=$request->id;
        $data['title']=$request->title;
        $find=ShippingMedium::where('id',$id)->first();
        if ($find->update($data)){
            return back()->with('success','Shipping Medium updated');
        }

    }

    public function add_weight(Request $request){
        if ($request->isMethod('get'))
        {
            $weights = Weight::all();
            return view($this->backendPagePath . 'shipping/weight',compact('weights'));

        }

        if($request->isMethod('post')){

            $request->validate([
                "min"=>"required|numeric|min:0",
                "max"=>"required|gt:min|numeric|min:0",
            ]);

            Weight::create([
                "min"=>$request->min,
                "max"=>$request->max,
            ]);
            return back()->with('success','Weight Category added');
        }
    }

    public function delete_weight(Request $request)
    {
        $find=Weight::findorfail($request->id);

        $find->delete();
        return back()->with('success','Weight Category deleted');

    }

    public function edit_weight(Request $request)
    {
        $request->validate([
            "min"=>"required|numeric|min:0",
            "max"=>"required|gt:min|numeric|min:0",
        ]);
        
        $id=$request->id;
        $data['min']=$request->min;
        $data['max']=$request->max;
        $find=Weight::where('id',$id)->first();
        if ($find->update($data)){
            return back()->with('success','Weight Category updated');
        }

    }

    public function add_price()
    {
        $shippings = Shipping::all();
        return view($this->backendPagePath . 'shipping/shipping',compact('shippings'));
    }

    public function post_price(Request $request)
    {
        try {
            $request->validate([
                "location_name"=>"required|unique:shippings,shipping_location",
                "price"=>"required|numeric|min:0",
            ]);

            Shipping::create([
                'shipping_location'=>$request->location_name,
                'shipping_price' => $request->price,
                'status' => $request->status
            ]);

            return redirect()->back()->with([
                'success' => true,
                'message' => 'Shipping rates added successfully.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error('Error while creating discount :- ' . $e->getMessage());
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function edit_price(Request $request)
    {

        try {
            $shipping = Shipping::findOrFail($request->id);

            $request->validate([
                "location_name" => "required|unique:shippings,shipping_location," . $shipping->id,
                "price" => "required|numeric|min:0",
            ]);

            $shipping->update([
                'shipping_location' => $request->location_name,
                'shipping_price'    => $request->price,
            ]);

            return redirect()->back()->with([
                'success' => true,
                'message' => 'Shipping rates updated successfully.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error('Error while updating shipping :- ' . $e->getMessage());
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function delete_price(Request $request)
    {
        try{
            $find = Shipping::findorfail($request->id);
            $find->delete();
            return redirect()->back()->with([
                'success' => true,
                'message' => 'Shipping rates deleted successfully.'
            ]);
        } catch (Exception $e) {
            Log::error('Error while updating shipping :- ' . $e->getMessage());
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function deal_status(Request $request)
    {
        $id = $request->deal;

        $deal = ShippingPrice::findorfail($id);

        if (isset($_POST['active'])) {
            $deal->status = 0;
        }
        if (isset($_POST['inactive'])) {
            $deal->status = 1;
        }
        $save = $deal->update();
        if ($save) {
            return back()->with('success','Status successfully changed');
        }
    }
}
