<?php

namespace App\Http\Controllers\Admin;

use App\Model\Brand;
use App\Model\BrandDiscount;
use Illuminate\Http\Request;

class BrandDiscountController extends BackendController
{
    public function index()
    {
        $discounts = BrandDiscount::with('brand')->get();
        return view( $this->backendPagePath.'brand_discounts.index', compact('discounts'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view($this->backendPagePath.'brand_discounts.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id|unique:brand_discounts,brand_id',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
        ]);

        BrandDiscount::create($request->all());

        return redirect()->route('brand-discounts.index')->with('success', 'Discount added successfully');
    }

    public function edit(BrandDiscount $brandDiscount)
    {
        $brands = Brand::all();
        return view($this->backendPagePath.'brand_discounts.edit', compact('brandDiscount', 'brands'));
    }

    public function update(Request $request, BrandDiscount $brandDiscount)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id|unique:brand_discounts,brand_id,' . $brandDiscount->id,
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
        ]);

        $brandDiscount->update($request->all());

        return redirect()->route('brand-discounts.index')->with('success', 'Discount updated successfully');
    }

    public function destroy(BrandDiscount $brandDiscount)
    {
        $brandDiscount->delete();
        return back()->with('success', 'Discount deleted.');
    }
}
