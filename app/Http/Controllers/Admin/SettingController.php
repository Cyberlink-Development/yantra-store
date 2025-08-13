<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Setting;
use App\Model\Faq;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class SettingController extends BackendController
{
    public function index(){
        $data = Setting::where('id', 1)->first();
        return view($this->backendPagePath . 'setting',compact('data'));
    }
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'title' => 'required',
                'meta_title' => 'max:60',
                'meta_description' => 'max:160'
            ]);
            $data = Setting::where('id',$id)->first();
            if ($request->hasfile('logo_white')) {
                $this->delete_file('logo_white');
                $imageFile = $request->file('logo_white');
                $imageName = 'logo-white'. '.' . $imageFile->getClientOriginalExtension();
                $destinationPath = public_path('theme-assets/img/logo/');
                $imageFile->move($destinationPath, $imageName);
                $data->logo_white = $imageName;
            }
            $data->title = $request->title;
            $data->phone1 = $request->phone1;
            $data->phone2 = $request->phone2;
            $data->address = $request->address;
            $data->email_primary = $request->email_primary;
            $data->email_secondary = $request->email_secondary;
            $data->twitter_link = $request->twitter_link;
            $data->instagram_link = $request->instagram_link;
            $data->facebook_link = $request->facebook_link;
            $data->welcome_text = $request->welcome_text;
            $data->copyright_text = $request->copyright_text;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            if($data->save()){
                return redirect()->back()->with([
                    'success'=> true,
                    'message' => 'Site details updated sucessfully.']
                );
            }
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function delete_file($field)
    {
        $findData = Setting::where('id', 1)->first();
        if (!$findData) {
            return false;
        }
        $fileName = $findData->$field;
        $deletePath = public_path('theme-assets/img/logo/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function logoDelete(Request $request){
        try{
            $data = Setting::where('id', 1)->first();
            if (!$data) {
                return response()->json([
                    'error' => true,
                    'message' => 'Data not found'
                ]);
            }
            $fileName = $data->{$request->field};
            $deletePath = public_path('theme-assets/img/logo/' . $fileName);
            if (file_exists($deletePath) && is_file($deletePath)) {
                unlink($deletePath);
            }
            $data->{$request->field} = null;
            $data->save();
            return response()->json([
                'success' => true,
                'message' => 'Logo removed sucessfully'
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }


    public function faq(Request $request)
    {
        if ($request->isMethod('get'))
        {
            $faq=Faq::all();
            return view($this->backendPagePath . 'faq',compact('faq'));
        }

        if ($request->isMethod('post'))
        {
            $request->validate([
               'title'=>'required',
               'description'=>'required'
            ]);
            $faq=new Faq();
            $faq->title=$request->title;
            $faq->description=$request->description;
            if ($faq->save())
            {
                return back()->with('success','Faq added successfully');
            }
        }
    }

}

