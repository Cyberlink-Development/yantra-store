<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class CategoryController extends BackendController
{

    protected $category;

    public function __construct(\App\Repositories\Category\CategoryRepository $category)
    {
        parent::__construct();
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $table = Category::all();

        return view($this->backendcategoryPath . 'index', compact('table'));

    }

    public function create(){
        $category = $this->category->getCategories();
        $table = $this->category->getAll();
        return view($this->backendcategoryPath . 'store', compact('category', 'table'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|unique:categories'
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name =rand(1, 1000000). time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/categories/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            if ($request->hasFile('banner')) {
                $banner = $request->file('banner');
                $bname =rand(1, 1000000). time() . '.' . $banner->getClientOriginalExtension();
                $destinationPath = public_path('/images/categories/');

                $banner->move($destinationPath, $bname);
                $data['banner'] = $bname;
            }
            $data['name'] = $request->name;
            $data['meta_title'] = $request->meta_title;
            $data['meta_description'] = $request->meta_description;
            $data['parent_id'] = $request->parent_id;
            $data['description'] = $request->description;
            $data['status'] = $request->has('status') ? '1' : '0';
            $data['is_header'] = $request->has('is_header') ? '1' : '0';
            $data['in_home'] = $request->has('in_home') ? '1' : '0';
            $data['is_footer'] = $request->has('is_footer') ? '1' : '0';
            $category = Category::create($data);
            return back()->with([
                'success' => true,
                'message' => 'Category was added successfully'
            ]);
        }catch (ValidationException $e) {
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

    public function edit($id){
        $data = Category::where('id',$id)->first();
        $category = $this->category->getCategories();
        return view($this->backendcategoryPath . 'edit',compact('category','data'));
    }

    public function update(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|unique:categories,name,'.$request->id
            ]);
            $id = $request->id;
            $data['name'] = $request->name;
            $data['parent_id'] = $request->parent_id;
            $data['meta_title'] = $request->meta_title;
            $data['meta_description'] = $request->meta_description;
            $data['description'] = $request->description;
            $data['status'] = $request->has('status') ? '1' : '0';
            $data['is_header'] = $request->has('is_header') ? '1' : '0';
            $data['in_home'] = $request->has('in_home') ? '1' : '0';
            $data['is_footer'] = $request->has('is_footer') ? '1' : '0';
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = rand(1, 1000000).time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/categories/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }

            if ($request->hasFile('banner')) {
                $this->delete_banner($id);
                $image = $request->file('banner');
                $name = rand(1, 1000000).time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/categories/');
                $image->move($destinationPath, $name);
                $data['banner'] = $name;
            }
            $new = Category::findorfail($id);
            if ($new->update($data)) {
                return redirect()->back()->with([
                    'success' => true,
                    'message' => 'Category successfully updated'
                ]);
            }
        }catch (ValidationException $e) {
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

    public function delete_file($id)
    {
        $findData = Category::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/categories/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_category(Request $request)
    {
        $id=$request->id;
        $category = Category::findOrFail($id);
//        dd($category->children);
        if ($category->products->count() > 0) {
            return redirect()->back()->with('error', 'Delete Products of this Category First');
        }
        if ($category->children->isNotEmpty()) {
            return redirect()->back()->with('error', 'Delete Child Categories First');
        }
        $this->delete_file($id);
        $this->delete_banner($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category Deleted!');

    }





    public function category_image_delete($id){
        $category = Category::find($id);
        $category->image = null;
        $this->delete_file($id);
        $category->save();

        return response()->json(['status' => 'success', 'message' => 'Image deleted successfully']);
    }

    public function delete_banner($id)
    {
        $findData = Category::findorfail($id);
        $fileName = $findData->banner;
        $deletePath = public_path('images/categories/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function category_banner_delete($id){
        $category = Category::find($id);
        $category->banner = null;
        $this->delete_banner($id);
        $category->save();

        return response()->json(['status' => 'success', 'message' => 'Image deleted successfully']);
    }

}
