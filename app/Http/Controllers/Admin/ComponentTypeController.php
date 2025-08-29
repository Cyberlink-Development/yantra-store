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
        return view($this->backendComponentTypePath.'index',compact('data'));
    }

    public function create()
    {
        return view($this->backendComponentTypePath.'create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:component_types,name',
            'level' => 'required|numeric',
        ]);

        ComponentType::create([
            'name' => $request->name,
            'status' => $request->status,
            'level' =>$request->level
        ]);

        return redirect()->back()->with('success', 'Component Type added successfully.');
    }

    public function edit($id)
    {
        $data = ComponentType::findOrFail($id);
        return view($this->backendComponentTypePath.'edit', compact('data'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100|unique:component_types,name,' . $id,
            'level' => 'required|numeric',
        ]);

        $componentType = ComponentType::findOrFail($id);

        $componentType->update([
            'name' => $request->name,
            'status' => $request->status,
            'level' => $request->level,
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
