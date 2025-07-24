<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;

class BlogController extends Controller
{
    public function all_blogs(){
        $blogs = Blog::all();

        return view('backend.pages.blog.all_blogs', compact('blogs'));
    }

    public function add_blog(Request $request){
        if ($request->isMethod('get')) {
            return view('backend.pages.blog.add_blog');
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'title'=>'required',
                'content'=>'required',
                'image'=>'required'
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/');

                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }

            $data['title'] = $request->title;
            $data['content'] = $request->content;

            $category = Blog::create($data);
            return back()->with('success', 'Blog added successfully');
        }
    }

    public function edit_blog(Request $request){
        if ($request->isMethod('get')) {
            $blog = Blog::find($request->id);

            return view('backend.pages.blog.edit_blog', compact('blog'));
        }

        if($request->isMethod('post')){
            $request->validate([
                'title'=>'required',
                'content'=>'required'
            ]);

            $id = $request->id;

            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
            $new = Blog::findorfail($id);

            $data['title'] = $request->title;
            $data['content'] = $request->content;

            if ($new->update($data)) {
                return redirect()->back()->with('success', 'Blog successfully edited');
            }
        }
    }

    public function delete_file($id)
    {
        $findData = Blog::findorfail($id);
        $fileName = $findData->image;
        $deletePath = public_path('images/blog/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            unlink($deletePath);
        }
        return true;
    }

    public function delete_blog($id){
        $blog = Blog::find($id);
        $this->delete_file($id);

        $blog->delete();
        return redirect()->back()->with('success', 'Blog successfully deleted');
    }
}
