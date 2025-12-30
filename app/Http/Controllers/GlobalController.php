<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;
use Illuminate\Support\Facades\File;

class GlobalController extends Controller
{
    public function updateStatus(Request $request){
        try{
            $request->validate([
                'id' => 'required|integer',
                'modelPath' => 'required|string',
                'field' => 'required|string',
            ]);

            $modelPath = $request->modelPath;
            $id = $request->id;
            $field = $request->field;
            if (!class_exists($modelPath)) {
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? "Invalid model path or the model doesn't exits." : 'Something went wrong. Please try again later'
                ]);
            }
            $data = $modelPath::find($id);
            if (!$data) {
                return response()->json([
                    'error' => true,
                    'message' => 'Data not found'
                ]);
            }
            if (!array_key_exists($field, $data->getAttributes())) {
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? "{$field} : Invalid field  or field doesn't exits." : 'Something went wrong. Please try again later.'
                ]);
            }
            $data->$field = $data->$field ? '0' : '1';
            $data->save();
            return response()->json([
                'success' => true,
                'message' => ucfirst($field) . ' updated successfully.'
            ]);
        }catch(ValidationException $e){
            return response()->json([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again later.'
            ]);
        }
    }

    public function deleteImage(Request $request){
        try{
            $request->validate([
                'id' => 'required|integer',
                'modelPath' => 'required|string',
                'field' => 'required|string',
                'folderPath' => 'required|string'
            ]);
            $modelPath = $request->modelPath;
            $id = $request->id;
            $field = $request->field;
            $folderPath = $request->folderPath;
            if (!class_exists($modelPath)) {
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? "Invalid model path or the model doesn't exits." : 'Something went wrong. Please try again later'
                ]);
            }
            $data = $modelPath::find($id);
            if (!$data) {
                return response()->json([
                    'error' => true,
                    'message' => 'Data not found'
                ]);
            }
            if (!array_key_exists($field, $data->getAttributes())) {
                return response()->json([
                    'error' => true,
                    'message' => app()->isLocal() ? "{$field} : Invalid field  or field doesn't exits." : 'Something went wrong. Please try again later.'
                ]);
            }

            $filePath = (correctFolderPath($folderPath) . $data->$field);
            if ($data->$field && File::exists($filePath)) {
                File::delete($filePath);
            }
            $data->$field = null;
            $data->save();
            return response()->json([
                'success' => true,
                'message' => ucfirst($field) . ' deleted successfully.'
            ]);

        }catch(ValidationException $e){
            return response()->json([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again later.'
            ]);
        }
    }
}
