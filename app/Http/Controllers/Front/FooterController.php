<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Faq;
use Illuminate\Http\Request;

class FooterController extends FrontController
{
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function refund()
    {
        return view('frontend.refund');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function privacy()
    {
        return view('frontend.privacy');

    }

    public function faq()
    {
        $faq=Faq::all();
        return view('frontend.faq',compact('faq'));
    }
}
