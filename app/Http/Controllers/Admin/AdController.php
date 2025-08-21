<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BackendController;
use Illuminate\Http\Request;
use App\Model\Ad\Ad;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;
use Illuminate\Support\Facades\File;

class AdController extends BackendController
{
    public function index()
    {
        $data = Ad::get();
        return view($this->backendAdsPath.'.index',compact('data'));
    }
    public function create()
    {
        $maxOrder = Ad::max('ordering')+1;
        return view($this->backendAdsPath.'.create',compact('maxOrder'));
    }
    public function store(Request $request)
    {
        try{
            $request->validate([
                'title' => 'required|string|max:255',
                'client_name' => 'nullable|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'link' => 'nullable|url|max:255',
                'ad_position' => 'required|in:after_hot_deals,after_categories,gone_in_seconds_sidebar,after_brands',
                'ad_layout' => 'required|in:single,two_column,sidebar_stack',
                'ordering' => 'required|integer|min:1',
                'start_date' => 'nullable|date|after_or_equal:today',
                'end_date' => 'nullable|date|after:start_date|required_with:start_date',
            ]);

            $data = $request->all();
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
                $image->move('uploads/ads/',$imageName);
                $data['image'] = $imageName;
            }
            $data['status'] = $request->has('status') ? '1' : '0';
            $data['open_in_new_tab'] = $request->has('open_in_new_tab') ? '1' : '0';

            Ad::create($data);
            return redirect()->route('ads.index')->with([
                'success' => true,
                'message' => 'Ads created successfully.'
            ]);
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error('Error while creating ads :-'.$e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        try{
            $data = Ad::findorFail($id);
            return view($this->backendAdsPath.'.edit',compact('data'));
        }catch(Exception $e){
            Log::error($e->getMessage());
            return redirect()->route('ads.index')->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again'
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        try{

            $request->validate([
                'title' => 'required|string|max:255',
                'client_name' => 'nullable|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'link' => 'nullable|url|max:255',
                'ad_position' => 'required|in:after_hot_deals,after_categories,gone_in_seconds_sidebar,after_brands',
                'ad_layout' => 'required|in:single,two_column,sidebar_stack',
                'ordering' => 'required|integer|min:1',
                'start_date' => 'nullable|date|after_or_equal:today',
                'end_date' => 'nullable|date|after:start_date|required_with:start_date',
            ]);

            $data = Ad::findOrFail($id);
            if($request->hasFile('image')){
                $imagePath = ('uploads/ads/'.$data->image);
                if(File::exists($imagePath)){
                    File::delete($imagePath);
                }
                $image = $request->file('image');
                $imageName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
                $image->move('uploads/ads',$imageName);
                $data->image = $imageName;
            }
            $data->title = $request->title;
            $data->image_size = $request->image_size;
            $data->description = $request->description;
            $data->client_name = $request->client_name;
            $data->link = $request->link;
            $data->open_in_new_tab = $request->has('open_in_new_tab') ? '1' : '0';
            $data->ad_position = $request->ad_position;
            $data->ad_layout = $request->ad_layout;
            $data->ordering = $request->ordering;
            $data->status = $request->has('status') ? '1' : '0';
            $data->start_date = $request->start_date;
            $data->end_date = $request->end_date;
            $data->save();
            return redirect()->route('ads.index')->with([
                'success' => true,
                'message' => 'Ad update successfully'
            ]);
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again'
            ]);
        }
    }
    public function destroy($id)
    {
        try{
            $data = Ad::findOrFail($id);
            $imagePath = ('uploads/ads/'.$data->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $data->delete();
            return redirect()->back()->with([
                'success' => true,
                'message' => 'Successfully deleted ad'
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
