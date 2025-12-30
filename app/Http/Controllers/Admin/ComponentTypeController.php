<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ComponentType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class ComponentTypeController extends BackendController
{
    public function view()
    {
        $data = ComponentType::all();
        return view($this->backendComponentTypePath.'index',compact('data'));
    }

    public function create()
    {
        $level = ComponentType::max('level') ?? 0;
        $level = $level + 1;
        // dd($level);
        return view($this->backendComponentTypePath.'create',compact('level'));
    }
    
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:100|unique:component_types,name',
                'level' => 'required|numeric',
            ]);

            ComponentType::create([
                'name' => $request->name,
                'status' => $request->status,
                'level' =>$request->level
            ]);
        
            return redirect()->route('show-componenttype')->with([
                'success' => true,
                'message' => 'Component Type added successfully.'
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

    public function edit($id)
    {
        $data = ComponentType::findOrFail($id);
        return view($this->backendComponentTypePath.'edit', compact('data'));

    }

    public function update(Request $request, $id)
    {
        try{
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

            return redirect()->route('show-componenttype')->with([
                'success' => true,
                'message' => 'Component Type updated successfully.'
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

    public function destroy($id)
    {
        try{
            $componentType = ComponentType::findOrFail($id);
            $componentType->delete();

            return redirect()->back()->with([
                'success' => true,
                'message' => 'Component Type deleted successfully.'
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

}
