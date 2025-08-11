<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Address;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Wishlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class UserController extends Controller
{
    public function orders()
    {
        if (!Auth::check())
        {
            return view('frontend.pages.account-signin');
        }
        $allorders = Order::with('details.products')->where('user_id',Auth::id())->orderby('updated_at','desc');
        $orders = $allorders->paginate(6);
        $order = $allorders->count();
        $wishlist = Wishlist::where('user_id',Auth::id())->count();
        $user = Auth::user();
// dd($orders);
        return view('frontend/pages/account-orders', compact('order','wishlist','user','orders'));
    }

    public function wishlist()
    {
        $order = Order::where('user_id',Auth::id())->orderby('updated_at','desc')->count();
        $allwishlist = Wishlist::with('products')->where('user_id',Auth::id());
        $wishlists = $allwishlist->paginate(6);
        $wishlist = $allwishlist->count();
        $user = User::where('id',Auth::user()->id)->first();
        // dd($wishlist);
        return view('frontend/pages/account-wishlist', compact('wishlists','wishlist','user','order'));
    }

    public function wishlist_remove($id)
    {
        try{
            Wishlist::where('id', $id)->where('user_id', Auth::id())->delete();
            return response()->json([
                'success' => true,
                'message' => 'Item removed from the wishlist successfully'
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function order_details(Request $request)
    {
        $order_id = $request->id;
        $order_details= OrderDetail::where('order_id',$order_id)->get();
        return view('frontend/order_details_modal', compact('order_details'));


    }

    public function user_dashboard(Request $request)
    {
        if ($request->isMethod('get')) 
        {
            $address = Address::all();
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->count();
            $order = Auth::user()->orders->count();
            $user = User::where('id',Auth::user()->id)->first();
            // dd($user,$address,$wishlist,$order);
            return view('frontend/pages/account-dashboard', compact('address','wishlist','order','user'));
        }

    }

    public function address(Request $request)
    {
        if ($request->isMethod('get')) {
            $address = Address::all();
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
            $order = Auth::user()->orders;
            return view('frontend/pages/account-address', compact('address','wishlist','order'));
        }

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
//                'first_name' => 'required',
//                'last_name' => 'required',
//                'country' => 'required',
//                'city' => 'required',
                'zip_code' => 'required',
                'address1' => 'required',
//                'address2' => 'required',
            ])->validate();

//            dd($request->all());
            $address = Address::updateorCreate(['user_id' =>$request->user_id,'address1'=>$request->address1,'address2' =>$request->address2,'zip_code' =>$request->zip_code]);
//               $address = Address::updateorCreate(['user_id' =>1,'address1'=>'tokyo','address2' =>'japan','zip_code' =>'54353']);


//            $address->user_id = $request->user_id;
////            $address->first_name = $request->first_name;
////            $address->last_name = $request->last_name;
////            $address->company = $request->company;
////            $address->country = $request->country;
////            $address->city = $request->city;
//            $address->zip_code = $request->zip_code;
//            $address->address1 = $request->address1;
//            $address->address2 = $request->address2;
//            if ($request->is_primary) {
//                $address->is_primary = 1;
//            }
            $address->save();
            return redirect()->back()->with('success', 'Address Saved');

        }
        return false;
    }

    public function user_profile(Request $request)
    {
        if ($request->isMethod('get')) {
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->count();
            $order = Auth::user()->orders->count();
            $user = User::where('id',Auth::user()->id)->first();
            return view('frontend/pages/account-profile',compact('wishlist','order','user'));
        }
        if ($request->isMethod('post')) {
            try{
                $request->validate([
                    'first_name' => 'required',
                    // 'last_name' => 'required',
                    // 'email'=>'required|email',
                    'phone'=>'required',
                    'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                
                $user =Auth::user();
                $data = [
                    'first_name' => $request->first_name,
                    // 'last_name' => $request->last_name,
                    // 'email' => $request->email,
                    'phone' => $request->phone,
                ];

                if ($request->hasFile('profile_image')) {
                    if ($user->image && Storage::disk('public')->exists($user->image)) {
                        Storage::disk('public')->delete($user->image);
                    }

                    $file = $request->file('profile_image');
                    $path = $file->store('profile_images', 'public');
                    $data['image'] = $path;
                }

                $user->update($data);
                
                return redirect()->back()->with([
                    'success' => true,
                    'message' => 'Profile Updated Successfully'
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
    }



    public function password_recovery()
    {
        return view('frontend/pages/account-password-recovery');
    }

    public function change_password(Request $request)
    {
        if ($request->isMethod('get')) {
            $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
            $order = Auth::user()->orders;
            return view('frontend/pages/change_password',compact('wishlist','order'));
        }
        if ($request->ajax()) {
            $messages = [
                'old_password.required' => 'Please Enter Old Password',
                'new_password.required' => 'Please Enter New Password',
                'confirm_password.required' => 'Please Enter The New Password Again',
            ];

            $validatedData = Validator::make($request->all(), [
                'old_password' => 'required',
                'new_password' => 'required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'required',
            ], $messages);
            if ($validatedData->fails()) {
                return response()->json(['errors' => $validatedData->errors()->all()], 406);
            }

            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return response()->json(['errors' => 'Old Password not match'], 401);

            }
            $user = Auth::user();
            $user->password = bcrypt($request->new_password);
            $user->save();
            return response()->json(['success' => 'Password changed'], 200);
        }

    }
}
