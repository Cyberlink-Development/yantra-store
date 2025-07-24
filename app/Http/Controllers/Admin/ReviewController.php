<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Review;

class ReviewController extends Controller
{
    public function all_review($id){
        $product = Product::find($id);

        return view('backend.pages.product.reviews', compact('product'));
    }

    public function delete_review($id){
        $review = Review::find($id);
        $review->delete();

        return back()->with('success', 'Review successfully deleted');
    }

    public function update_review($id, $value){

        $review = Review::find($id);
        $review->show = $value;

        $review->save();

        return back()->with('success', 'Review successfully updated');
    }
}
