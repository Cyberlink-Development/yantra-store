<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ComponentType;
use App\Model\Product;
use Illuminate\Http\Request;

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
    public function create($id)
    {
        $data = Product::where(['status'=> 1 , 'id'=>$id])->first();
        $component_types = ComponentType::where('status',1)->where('id', '!=', $data->component_type)->get();
        // dd($data,$component_types);  
        return view($this->backendComponentPath.'create',compact('data','component_types'));
    }
    public function store(Request $request)
    {
        dd($request->all());
        return view($this->backendComponentPath.'create',compact('data'));
    }
}
