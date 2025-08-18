<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quotation;

class QuotationController extends Controller
{
    public function quotation_all($uri){
        $validTypes = ['product', 'service'];

        if (!in_array($uri, $validTypes)) {
            abort(404);
        }

        $title = ucfirst($uri);
        $quotations = Quotation::where('type', $uri)->orderByDesc('created_at')->get();

        return view('backend.pages.quotation.quotation-all', compact('quotations','title'));
    }

    public function delete_quotation($id){
        $quotation = Quotation::find($id);
        $quotation->delete();

        return back()->with('success', 'Quotation successfully deleted');
    }

    public function view_quotation($id,$uri){
        $quotation = Quotation::find($id);
        
        return view('backend.pages.quotation.quotation-view', compact('quotation'));
    }
}
