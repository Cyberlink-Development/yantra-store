<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quotation;

class QuotationController extends Controller
{
    public function quotation_all(){
        $quotations = Quotation::all();

        return view('backend.pages.quotation.quotation-all', compact('quotations'));
    }

    public function delete_quotation($id){
        $quotation = Quotation::find($id);
        $quotation->delete();

        return back()->with('success', 'Quotation successfully deleted');
    }

    public function view_quotation($id){
        $quotation = Quotation::find($id);

        return view('backend.pages.quotation.quotation-view', compact('quotation'));
    }
}
