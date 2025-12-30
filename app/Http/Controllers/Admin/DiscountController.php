<?php

namespace App\Http\Controllers\Admin;

use App\Model\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class DiscountController extends BackendController
{
    public function index()
    {
        $data = Discount::orderBy('created_at', 'desc')->get();
        return view($this->backendDiscountPath.'index',compact('data'));
    }
    public function create()
    {
        return view($this->backendDiscountPath.'create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'code' => 'required|string|max:100|unique:discounts,code',
                'type' => ['required', Rule::in(['flat', 'percent'])],
                'discount' => ['required','numeric','min:0',Rule::when($request->type === 'percent', ['lt:100']),],
                'usage_limit' => 'nullable|integer|min:1',
                'expiry_date' => 'nullable|date|after_or_equal:today',
                'status' => 'required|boolean',
            ]);

            Discount::create([
                'code' => $request->code,
                'type' => $request->type,
                'discount' => $request->discount,
                'usage_limit' => $request->usage_limit,
                'expiry_date' => $request->expiry_date,
                'status' => $request->status,
            ]);

            return redirect()->route('admin.discount')->with([
                'success' => true,
                'message' => 'Discount created successfully.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error('Error while creating discount :- ' . $e->getMessage());
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function edit($id)
    {
        $discount = Discount::findOrFail($id);
        return view($this->backendDiscountPath.'edit', compact('discount'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'code' => 'required|string|max:100|unique:discounts,code,' . $id,
                'type' => ['required', Rule::in(['flat', 'percent'])],
                'discount' => ['required','numeric','min:0',Rule::when($request->type === 'percent', ['lt:100']),],
                'usage_limit' => 'nullable|integer|min:1',
                'expiry_date' => 'nullable|date|after_or_equal:today',
                'status' => 'required|boolean',
            ]);

            $discount = Discount::findOrFail($id);
            $discount->update([
                'code' => $request->code,
                'type' => $request->type,
                'discount' => $request->discount,
                'usage_limit' => $request->usage_limit,
                'expiry_date' => $request->expiry_date,
                'status' => $request->status,
            ]);

            return redirect()->route('admin.discount')->with([
                'success' => true,
                'message' => 'Discount updated successfully.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        } catch (Exception $e) {
            Log::error('Error while updating discount :- ' . $e->getMessage());
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    /**
     * Remove a discount.
     */
    public function destroy($id)
    {
        try {
            
            $discount = Discount::findOrFail($id);
            $discount->delete();

            return redirect()->back()->with([
                'success' => true,
                'message' => 'Discount deleted successfully.'
            ]);
        } catch (Exception $e) {
            Log::error('Error while deleting discount :- ' . $e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

}
