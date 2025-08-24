<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;
use App\Model\Product;


class ReviewController extends Controller
{
    public function create(Request $request)
    {
        $requestType = $request->ajax();
        try{
            if (!Auth::check()) {
                $message = 'Please login first.';
                return $requestType
                    ? response()->json(['info' => true, 'message' => $message])
                    : redirect()->back()->with(['info' => true, 'message' => $message]);
            }
            $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'message' => 'required|string',
                'product_id' => 'required|exists:products,id'
            ]);
            $oldReview = Review::where('product_id', $request->product_id)->where('user_id', Auth::id())->first();
            if ($oldReview) {
                $message = 'You have already reviewed this product.';
                return $requestType
                    ? response()->json(['error' => true, 'message' => $message])
                    : redirect()->back()->with(['error' => true, 'message' => $message]);
            }
            $data = $request->only(['rating', 'message', 'product_id']);
            $data['user_id'] = Auth::id();
            $data['name'] = Auth::user()->first_name.' '.Auth::user()->last_name;
            $data['email'] = Auth::user()->email;
            Review::create($data);
            $message = 'Your review is being verified.';
            return $requestType
                ? response()->json(['success' => true, 'message' => $message])
                : redirect()->back()->with(['success' => true, 'message' => $message]);

        }catch(ValidationException $e){
            $message = $e->validator->errors()->all();
            return $requestType
                ? response()->json(['error' => true, 'message' => $message])
                : redirect()->back()->with(['error' => true, 'message' => $message]);
        }catch(Exception $e){
            Log::error('Error while creating review :- '.$e->getMessage());
            $message = app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again';
            return $requestType
                ? response()->json(['error' => true, 'message' => $message])
                : redirect()->back()->with(['error' => true, 'message' => $message]);
        }
    }

    public function sort(Request $request,$id)
    {
        try{
            $data = Product::findOrFail($id);
            $query = $data->reviews()->active();
            $sort = $request->input('sortValue', 'latest');
            if (!$this->validateSort($sort)) {
                return $request->ajax()
                ? response()->json(['error' => true, 'message' => 'Invalid sorting type'])
                : redirect()->back()->with(['error' => true, 'message' => 'Invalid sorting type']);
            }
            $this->applySorting($query, $sort);
            $reviews = $query->get();
            if($request->ajax()){
                return response()->json([
                    'success' => true,
                    'message' => "Review sorted successfully",
                    'view' => view('components.review.review_list',['reviews'=>$reviews])->render(),
                ]);
            }
            return redirect()->back()->with([
                'success' => true,
                'message' => 'Review sorted successfully',
                'reviews' => $reviews
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    private function validateSort(string $sort)
    {
        $validSorts = ['latest', 'oldest', 'high_rating', 'low_rating'];
        return in_array($sort, $validSorts);
    }


    private function applySorting($query,$sort){
        switch($sort){
            case 'latest':
                $query->latest();
                break;
            case 'oldest':
                $query->oldest();
                break;
            case 'high_rating':
                $query->orderby('rating','desc');
                break;
            case 'low_rating':
                $query->orderby('rating','asc');
                break;
            default:
                $query->latest();
        }
    }
}
