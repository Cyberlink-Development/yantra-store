<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\OffersModel;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class OffersController extends Controller
{
    public function index()
    {
        $offers = OffersModel::all();
        return view('backend.pages.offers.index',compact('offers'));
    }
    public function show($id)
    {
        $products = Product::where('offer_id',$id)->get();
        return view('backend.pages.offers.show',compact('products'));
    }

    public function create()
    {
        return view('backend.pages.offers.create');
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'title'     => 'required|string|max:255',
                'sub_title' => 'nullable|string|max:255',
                'type'      => 'nullable|in:0,1',
                'discount'  => 'nullable|numeric|min:0',
            ]);

            OffersModel::create([
                'title'     => $request->title,
                'sub_title' => $request->sub_title,
                'type'      => $request->type,
                'discount'  => $request->discount ?? 0,
                'status'    => $request->has('status') ? 1 : 0,
            ]);

            return redirect()->route('offers.index')->with([
                'success' => true,
                'message' => 'Offers Created Successfully.'
            ]);
        } catch (ValidationException $e) {
            return back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }

    }

    public function edit($id)
    {
        $offer = OffersModel::findOrFail($id);
        return view('backend.pages.offers.edit', compact('offer'));
    }


    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'title'     => 'required|string|max:255',
                'sub_title' => 'nullable|string|max:255',
                'type'      => 'nullable|in:0,1',
                'discount'  => 'nullable|numeric|min:0',
            ]);

            $offer = OffersModel::findOrFail($id);

            $offer->update([
                'title'     => $request->title,
                'sub_title' => $request->sub_title,
                'type'      => $request->type,
                'discount'  => $request->discount ?? 0,
                'status'    => $request->has('status') ? 1 : 0,
            ]);

            return redirect()->route('offers.index')->with([
                'success' => true,
                'message' => 'Offer Updated Successfully.'
            ]);
        } catch (ValidationException $e) {
            return back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function destroy( $id)
    {
        $offer = OffersModel::findOrFail($id);
        $offer->delete();

        return redirect()->route('offers.index')->with([
            'success' => true,
            'message' => 'Offer Deleted Successfully.'
        ]);
    }

}
