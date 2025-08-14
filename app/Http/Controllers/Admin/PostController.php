<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class PostController extends Controller
{
    public function index($uri)
    {
        $posttype = PostType::where('uri',$uri)->first();
        $data = Post::where(['post_type'=>$posttype->id,'post_parent'=>0])->orderBy('post_order','asc')->get();

        return view('backend.cms.posts.index',compact('data','posttype'));
    }

    public function toggleStatus($id)
    {
        $post = Post::findOrFail($id);
        $post->status = $post->status == 0 ? 1 : 0;
        $post->save();

        return response()->json([
            'success' => true,
            'status' => $post->status
        ]);
    }


    public function create($uri)
    {
        $posttype = PostType::where('uri',$uri)->first();
        $ordering = Post::max('post_order');
        $ordering = $ordering + 1;

        return view('backend.cms.posts.create',compact('posttype','ordering'));
    }

    public function store(Request $request, $post)
    {
        try{
            $request->validate([
                'post_title'   => 'required|string|max:255',
                'post_type'    => 'required|exists:cl_post_type,id',
                'uri'         => 'required|string|max:255|unique:cl_posts,uri',
                'banner'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            $data = $request->all();
            
            if ($request->hasFile('banner')) {
                $bannerName = time() . '_' . Str::slug($request->post_title) . '.' . $request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('uploads/banners'), $bannerName);
                $data['banner'] = $bannerName;
            }

            if ($request->hasFile('thumbnail')) {
                $thumbName = time() . '_' . Str::slug($request->post_title) . '.' . $request->thumbnail->getClientOriginalExtension();
                $request->thumbnail->move(public_path('uploads/thumbnails'), $thumbName);
                $data['thumbnail'] = $thumbName;
            }

            Post::create($data);

            return redirect()->route('admin.post.index',$post)->with([
                'success' => true,
                'message' => 'Post Created Successfully.'
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

    public function edit($uri ,$id)
    {
        $posttype = PostType::where('uri',$uri)->first();
        $post = Post::find($id);

        return view('backend.cms.posts.edit',compact('posttype','post'));
    }

    public function deleteThumbnail($id)
    {
        try{
            $post = Post::findOrFail($id);

            if ($post->thumbnail && file_exists(public_path('uploads/thumbnails/' . $post->thumbnail))) {
                unlink(public_path('uploads/thumbnails/' . $post->thumbnail));
            }

            $post->thumbnail = null;
            $post->save();

            return response()->json([
                'success' => true,
                'message' => 'Thumbnail deleted successfully'
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }
    public function deleteBanner($id)
    {
        try{
            $post = Post::findOrFail($id);

            if ($post->banner && file_exists(public_path('uploads/banners/' . $post->banner))) {
                unlink(public_path('uploads/banners/' . $post->banner));
            }

            $post->banner = null;
            $post->save();

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

    public function update(Request $request,$post, $id)
    {
        try{
            $request->validate([
                'post_title'   => 'required|string|max:255',
                'post_type'    => 'required|exists:cl_post_type,id',
                'uri'         => 'required|string|max:255|unique:cl_posts,uri,' . $id,
                'banner'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);
            $postData = Post::findOrFail($id);

            if ($request->hasFile('banner'))
            {
                if ($postData->banner && file_exists(public_path('uploads/banners/' . $postData->banner))) {
                    unlink(public_path('uploads/banners/' . $postData->banner));
                }

                $banner = $request->file('banner');
                $bannerName = time() . '_' . Str::slug($request->post_title) . '.' . $banner->getClientOriginalExtension();
                $banner->move(public_path('uploads/banners'), $bannerName);
                $postData->banner = $bannerName;
            }
            if ($request->hasFile('thumbnail'))
            {
                if ($postData->thumbnail && file_exists(public_path('uploads/thumbnails/' . $postData->thumbnail))) {
                    unlink(public_path('uploads/thumbnails/' . $postData->thumbnail));
                }

                $thumbnail = $request->file('thumbnail');
                $thumbnailName = time() . '_' . Str::slug($request->post_title) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('uploads/thumbnails'), $thumbnailName);
                $postData->thumbnail = $thumbnailName;
            }

            $postData->update([
                'post_type'         => $request->post_type,
                'post_title'        => $request->post_title,
                'sub_title'         => $request->sub_title,
                'post_order'        => $request->post_order ?? 0,
                'post_content'      => $request->post_content,
                'post_excerpt'      => $request->post_excerpt,
                'meta_keyword'      => $request->meta_keyword,
                'meta_description'  => $request->meta_description,
                'associated_title'  => $request->associated_title,
                'external_link'     => $request->external_link,
                'template'          => $request->template,
                'status'            => $request->status,
                'is_header'         => $request->is_header,
                'is_footer'         => $request->is_footer,
            ]);

            return redirect()->route('admin.post.index',$post)->with([
                'success' => true,
                'message' => 'Post Updated Successfully.'
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
    public function destroy($post, $id)
    {
        $postData = Post::findOrFail($id);

        if ($postData->banner && file_exists(public_path('uploads/banners/'. $postData->banner))) {
            unlink(public_path('uploads/banners/'. $postData->banner));
        }
        if ($postData->thumbnail && file_exists(public_path('uploads/thumbnails/'. $postData->thumbnail))) {
            unlink(public_path('uploads/thumbnails/'. $postData->thumbnail));
        }

        $postData->delete();

        return redirect()->route('admin.post.index',$post)->with([
            'success' => true,
            'message' => 'Post Deleted Successfully.'
        ]);
    }

}
