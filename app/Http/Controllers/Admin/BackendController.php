<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    protected $backendPath = 'backend.';
    protected $backendPagePath = 'null';
    protected $backendcategoryPath = 'null';
    protected $backendAdsPath = 'null';
    protected $backendproductPath = 'null';
    protected $backendbrandPath = 'null';
    protected $backendslidePath = 'null';
    protected $backendsetupPath = 'null';
    protected $backendComponentPath = 'null';
    protected $backendComponentTypePath = 'null';




    public function __construct()
    {
        $this->backendPath;
        $this->backendPagePath = $this->backendPath . '/' . 'pages.';
        $this->backendcategoryPath = $this->backendPath . '/' . 'pages.' . '/' . 'category.';
        $this->backendAdsPath = $this->backendPath . '/' . 'pages.' . '/' . 'ads.';
        $this->backendproductPath = $this->backendPath . '/' . 'pages.' . '/' . 'product.';
        $this->backendslidePath = $this->backendPath . '/' . 'pages.' . '/' . 'slide.';
        $this->backendbrandPath = $this->backendPath . '/' . 'pages.' . '/' . 'brand.';
        $this->backendsetupPath = $this->backendPath . '/' . 'pages.' . '/' . 'setup.';
        $this->backendComponentTypePath = $this->backendPath . '/' . 'pages.' . '/' . 'component_types.';
        $this->backendComponentPath = $this->backendPath . '/' . 'pages.' . '/' . 'component.';


    }
}
