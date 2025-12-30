<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BannerModel;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class BannerController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BannerModel::orderBy('id', 'desc')->get();
        return view($this->backendPagePath . 'banner/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->backendPagePath . 'banner/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $request->validate([
                'title' => 'required',
                'picture' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
            ]);
            $req = $request->all();

            if ($request->hasFile('picture')) {
                $image = $request->file('picture');
                $name = time() .  '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/banners/');

                $image->move($destinationPath, $name);
                $req['picture'] = $name;
            }
            $data = BannerModel::create($req);
            return redirect()->route('banner.index')->with([
                'success' => true,
                'message' => 'Banner added successfully.'
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
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerModel $bannerModel, $id)
    {
        $data = BannerModel::find($id);
        return view($this->backendPagePath . 'banner/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $data = BannerModel::findOrFail($id);
            $rules = [
                'title' => 'required|string',
            ];

            if (!$data->picture) {
                $rules['picture'] = 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048';
            }

            $request->validate($rules);

            if ($request->hasFile('picture')) {
                if($data->picture && file_exists(public_path('uploads/banners/' . $data->picture))){
                    unlink('uploads/banners/' . $data->picture);
                }
                // Upload new file
                $image = $request->file('picture');
                $name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/banners/');
                $image->move($destinationPath, $name);
                $data['picture'] = $name;
            }
            $data->title = $request->title;
            $data->caption = $request->caption;
            $data->content = $request->content;
            $data->link = $request->link;
            $data->save();
            return redirect()->route('banner.index')->with([
                'success' => true,
                'message' => 'Banner update successfully.'
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
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = BannerModel::find($id);

        if (file_exists(public_path('uploads/banners/' . $data->picture))) {
            unlink('uploads/banners/' . $data->picture);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Banner Deleted.');
    }
}
