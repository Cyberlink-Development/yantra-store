<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Exception;
use Log;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('created_at', 'desc')->get();
        return view("backend.pages.contact.index",compact('data'));
    }

    public function destroy($id)
    {
        try{
            $data = Contact::findOrFail($id);
            $data->delete();
            return redirect()->back()->with([
                'success' => true,
                'message' => 'Contact Inquiry Deleted Successfully.'
            ]);
        }catch(Exception $e){
            Log::error('Error while delete ads :- '.$e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again'
            ]);
        }
    }

}
