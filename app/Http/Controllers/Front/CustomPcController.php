<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\ComponentType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class CustomPcController extends Controller
{
    public function index()
    {
        $componentTypes = ComponentType::where('status',1)->with('products')->orderBy('level','asc')->get();
        // dd($componentTypes);
        return view('frontend.pages.custom-pc.custom-pc',compact('componentTypes'));
    }

    
}
