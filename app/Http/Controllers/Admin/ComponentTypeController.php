<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ComponentType;
use Illuminate\Http\Request;

class ComponentTypeController extends BackendController
{
    public function view()
    {
        $data = ComponentType::all();
        return view($this->backendComponentPath.'index',compact('data'));
    }

    public function create()
    {
        return view($this->backendComponentPath.'create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:component_types,name|max:100',
        ]);

        ComponentType::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Component Type added successfully.');
    }

    public function edit($id)
    {
        $data = ComponentType::findOrFail($id);
        return view($this->backendComponentPath.'edit', compact('data'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100|unique:component_types,name,' . $id,
        ]);

        $componentType = ComponentType::findOrFail($id);

        $componentType->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('show-componenttype')->with('success', 'Component Type updated successfully.');

    }

    public function destroy($id)
    {
        $componentType = ComponentType::findOrFail($id);
        $componentType->delete();

        return redirect()->back()->with('success', 'Component Type deleted successfully.');
    }

}
