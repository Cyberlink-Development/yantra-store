<?php

use App\Model\Brand;
use App\Model\ComponentType;
use App\Model\Product;

function categorySeperator( $size, $string = '')
{
    dd($size, $string);
    for ($i = 2; $i < $size; $i++) {
        $string .= $string;
    }
    // dd($size, $string);
    return $string;
}

 function getConfiguration($key)
{
    $config = \App\Model\Configuration::where('configuration_key', '=', $key)->first();
//    dd($config);
    if ($config != null) {
        return $config->configuration_value;
    }
    return null;
}

function generateReview($slug)
{
    $product = \App\Model\Product::where('slug', $slug)->first();
    $count = $product->reviews->count();
    $fivestar = \App\Model\Review::where('product_id', '=', $product->id)->where('rating', '=', 5)->get();
    $fourstar = \App\Model\Review::where('product_id', '=', $product->id)->where('rating', '=', 4)->get();
    $threestar = \App\Model\Review::where('product_id', '=', $product->id)->where('rating', '=', 3)->get();
    $twostar = \App\Model\Review::where('product_id', '=', $product->id)->where('rating', '=', 2)->get();
    $onestar = \App\Model\Review::where('product_id', '=', $product->id)->where('rating', '=', 1)->get();
    if ($count != 0) {
        $total = 5 * count($fivestar) + 4 * count($fourstar) + 3 * count($threestar) + 2 * count($twostar) + 1 * count($onestar);
        $total_review = count($fivestar) + count($fourstar) + count($threestar) + count($twostar) + count($onestar);
        $average = $total / $total_review;
    }
    return $average;
}


function get_brand_name($id)
{
    $data = Brand::find($id);
    return $data ? $data->brand_name : '';
}

function get_componenttype_by_id($id)
{
    $data= ComponentType::find($id);
    return $data ? $data->name : '';
}
function get_product_by_componenttype_id($id)
{
    $data= Product::where(['component_type' => $id, 'status'=> 1])->get();
    // dd($data);
    return $data ? $data : '';
}

//function deal_date($date)
//{
//    $deal = App\Model\Deal::where('id', '=', 1)->first();
//    if ($deal != null) {
//        return $deal->date;
//    }
//    return null;
//
//}


/************************ By Sangam Starts ******************************/
function getAllCategoryChildrenIds($category)
{
    $ids = [$category->id];
    foreach ($category->children()->active()->get() as $child) {
        $ids = array_merge($ids, getAllCategoryChildrenIds($child));
    }
    return $ids;
}
/************************ By Sangam Ends ********************************/
