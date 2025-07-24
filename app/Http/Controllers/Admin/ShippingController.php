<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShippingMedium;
use App\Weight;
use App\ShippingPrice;

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
        $shippingmedium=ShippingMedium::all();
        $weights = Weight::all();
        $shippings = ShippingPrice::all();

        return view($this->backendPagePath . 'shipping/shipping',compact('shippingmedium', 'weights', 'shippings'));
    }

    public function post_price(Request $request){

        $request->validate([
            "shipping_medium"=>"required",
            "weight"=>"required",
            "price"=>"required|numeric|min:0",
        ]);

        $shipping = ShippingPrice::where([
            ['weight_id', '=', $request->weight],
            ['shipping_media_id', '=', $request->shipping_medium],
        ])->first();

        if($shipping){
            $shipping->price = $request->price;
            if($request->has('status')){
                $shipping->status = $request->status;
            }

            $shipping->save();
        }else{
            $shipping= new ShippingPrice();
            $shipping->status = $request->status;
            $shipping->shipping_media_id = $request->shipping_medium;
            $shipping->weight_id = $request->weight;
            $shipping->price = $request->price;

            $shipping->save();
        }

        return back()->with('success','Shipping Price added');
    }

    public function edit_price(Request $request){

        $request->validate([
            "shipping_medium"=>"required",
            "weight"=>"required",
            "price"=>"required|numeric|min:0",
        ]);

        $shipping = ShippingPrice::where([
            ['weight_id', '=', $request->weight],
            ['shipping_media_id', '=', $request->shipping_medium],
            ['id', '!=', $request->id]
        ])->first();

        if($shipping){
            return back()->withErrors(['msg' => 'Weight category and shipping medium combination already exists']);
        }else{
            $shipping= ShippingPrice::find($request->id);
            $shipping->shipping_media_id = $request->shipping_medium;
            $shipping->weight_id = $request->weight;
            $shipping->price = $request->price;

            $shipping->save();
        }

        return back()->with('success','Shipping Price updated');
    }

    public function delete_price(Request $request)
    {
        $find=ShippingPrice::findorfail($request->id);
        $find->delete();
        return back()->with('success','Shipping Price deleted');
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
