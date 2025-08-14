<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class PostTypeController extends Controller
{
    public function index(){

        $data = PostType::orderBy('ordering','asc')->get();
        return view('backend.cms.posttype.index',compact('data'));
    }
    public function toggleStatus($id)
    {
        $postType = PostType::findOrFail($id);
        $postType->status = $postType->status == 0 ? 1 : 0;
        $postType->save();

        return response()->json([
            'success' => true,
            'status' => $postType->status
        ]);
    }

    public function create()
    {
        $fileList = scandir(resource_path('views/frontend/cms/'));
        $filterArray = $this->filter_template_posttype($fileList);

        $filename = array();
        foreach ($filterArray as $filterArr) {
            $filename[] = $this->remove_extention($filterArr);
        }
        $file1 = array('page'=>'Choose Template');
        foreach ($filename as $file) {
            $file1[$file] = $file;
        }
        $templates = $file1;

        $ordering = PostType::max('ordering');
        $ordering = $ordering + 1;
        // dd($ordering);
        return view('backend.cms.posttype.create', compact('ordering','templates'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'post_type'   => 'required|string|max:255',
                'uri'         => 'required|string|max:255|unique:cl_post_type,uri',
                'banner'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $data = $request->all();
            // dd($data);
            $bannerPath = null;
            if ($request->hasFile('banner')) {
                $banner = $request->file('banner');
                $bannerName = time() . '_' . Str::slug($request->post_type) . '.' . $banner->getClientOriginalExtension();
                $banner->move(public_path('uploads/banners'), $bannerName);
                $bannerPath = $bannerName;
            }
            $data['banner'] = $bannerPath;

            PostType::create($data);

            return redirect()->route('type.posttype.index')->with([
                'success' => true,
                'message' => 'Posttype Created Successfully.'
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
        $fileList = scandir(resource_path('views/frontend/cms/'));
        $filterArray = $this->filter_template_posttype($fileList);

        $filename = array();
        foreach ($filterArray as $filterArr) {
            $filename[] = $this->remove_extention($filterArr);
        }
        $file1 = array('page'=>'Choose Template');
        foreach ($filename as $file) {
            $file1[$file] = $file;
        }
        $templates = $file1;
        $postType = PostType::where('id',$id)->first();
        
        return view('backend.cms.posttype.edit', compact('postType','templates'));
    }
    public function deleteBanner($id)
    {
        try{
            $postType = PostType::findOrFail($id);

            if ($postType->banner && file_exists(public_path('uploads/banners/' . $postType->banner))) {
                unlink(public_path('uploads/banners/' . $postType->banner));
            }

            $postType->banner = null;
            $postType->save();
            return response()->json([
                'success' => true,
                'message' => 'Banner deleted successfully'
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'post_type'   => 'required|string|max:255',
                'uri'         => 'required|string|max:255|unique:cl_post_type,uri,' . $id,
                'banner'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $postType = PostType::findOrFail($id);

            if ($request->hasFile('banner')) 
            {
                if ($postType->banner && file_exists(public_path('uploads/banners/' . $postType->banner))) {
                    unlink(public_path('uploads/banners/' . $postType->banner));
                }

                $banner = $request->file('banner');
                $bannerName = time() . '_' . Str::slug($request->post_type) . '.' . $banner->getClientOriginalExtension();
                $banner->move(public_path('uploads/banners'), $bannerName);
                $postType->banner = $bannerName;
            }

            $postType->update([
                'post_type'  => $request->post_type,
                'uri'        => $request->uri,
                'caption'    => $request->caption,
                'posttype_content' => $request->posttype_content,
                'ordering'   => $request->ordering ?? 0,
                'status'     => $request->status,
                'template'     => $request->template,
                'is_header'  => $request->is_header,
                'is_footer'  => $request->is_footer,
            ]);

            return redirect()->route('type.posttype.index')->with([
                'success' => true,
                'message' => 'Posttype Updated Successfully.'
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

    public function destroy($id)
    {
        $postType = PostType::findOrFail($id);

        if ($postType->banner && file_exists(public_path('uploads/banners/'. $postType->banner))) {
            unlink(public_path('uploads/banners/'. $postType->banner));
        }

        $postType->delete();

        return redirect()->route('type.posttype.index')->with([
            'success' => true,
            'message' => 'Posttype Updated Successfully.'
        ]);
    }

    private function filter_template_posttype($template){
        $tmpl2 = array();
        if(!empty($template)){
            foreach($template as $tmpl){
            if(strpos($tmpl, "posttypeTemplate-") !== false){
                $tmpl2[] = $tmpl;
            }   
            }
        }
        return $tmpl2;
    }

    private function remove_extention($filename){
        $exp = explode('.',$filename);
        $file = $exp[0];
        return $file;
    }
}
