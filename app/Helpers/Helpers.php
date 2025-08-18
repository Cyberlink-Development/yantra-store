<?php

use App\Model\Brand;
use App\Model\ComponentType;
use App\Model\Post;
use App\Model\PostType;
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

function has_posts($post_type){
  $data = Post::where(['post_type'=>$post_type])->orderBy('post_order','asc')->get();
  if($data->count() > 0){
    return $data;
  }
  return false;
}

function check_posttype_uri($uri)
{
    $data = PostType::where(['uri' => $uri])->first();
    if ($data) {
        return true;
    }
    return false;
}


function check_post_uri($uri)
{
    $data = Post::where(['uri' => $uri])->first();
    if ($data) {
        return true;
    }
    return false;
}

/************************ By Sangam Starts ******************************/
function getAllCategoryChildrenIds($category)
{
    $ids = [$category->id];
    foreach ($category->children()->active()->get() as $child) {
        $ids = array_merge($ids, getAllCategoryChildrenIds($child));
    }
    return $ids;
}
function roundUpMaxPrice($maxPrice, $roundTo = 100) {
    return ceil($maxPrice / $roundTo) * $roundTo;
}

function isFilterChecked(string $category, string $value)
{
    $filterby = request()->query('filterby', '');
    if (!$filterby) {
        return false;
    }
    $filters = [];
    $pairs = explode(';', $filterby);
    foreach ($pairs as $pair) {
        $parts = explode(':', $pair);
        if (count($parts) !== 2) {
            continue;
        }
        [$key, $values] = $parts;
        $filters[$key] = explode(',', $values);
    }
    return isset($filters[$category]) && in_array($value, $filters[$category]);
}
function isFilterByCategory(string $category): bool
{
    $filterby = request()->query('filterby', '');
    if (!$filterby) {
        return false;
    }
    $pairs = explode(';', $filterby);
    foreach ($pairs as $pair) {
        $parts = explode(':', $pair);
        if (count($parts) !== 2) {
            continue;
        }
        [$key, $values] = $parts;
        if ($key === $category && !empty($values)) {
            return true;
        }
    }
    return false;
}
function getModelPathFromData($data)
{
    return str_replace('\\', '\\\\', get_class($data));
    /*
    Output: App\\Model\\Test
    Remarks: Double slashes are retrun cause we are using this function to pass the model path to the ajax which removes the slash. But using doble slashes it treats the first one as the escape operator and ignore the second one cause escape operator means to ignore or skip first character after it.
    */
}
function correctFolderPath($folderPath){
    $folderPath = trim($folderPath);
    if(substr($folderPath, -1) !== '/'){
        $folderPath .= '/';
    }
    return $folderPath;
    /*
        input1 : 'images/banner';
        input2 : 'images/banner/';
        output : 'images/banner/';
    */
}
/************************ By Sangam Ends ********************************/
