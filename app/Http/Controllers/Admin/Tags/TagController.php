<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Admin\BackendController;
use App\Model\Tag\Tag;
use Illuminate\Http\Request;

class TagController extends BackendController
{

    public function index()
    {
        $tags = Tag::all();
        return view($this->backendPagePath . 'tags.index',compact('tags'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Tag $tag)
    {
        //
    }


    public function edit(Tag $tag)
    {
        //
    }

    public function update(Request $request, Tag $tag)
    {
        //
    }

    public function destroy(Tag $tag)
    {
        //
    }
}
