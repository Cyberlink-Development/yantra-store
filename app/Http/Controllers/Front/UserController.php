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
        if (!Auth::check()) {
            return view('frontend.pages.account-signin');
        }
        $allorders = Order::with('details.products')->where('user_id', Auth::id())->orderby('updated_at', 'desc');
        $orders = $allorders->paginate(6);
        $order = $allorders->count();
        $wishlist = Wishlist::where('user_id', Auth::id())->count();
        $user = Auth::user();
        // dd($orders);
        return view('frontend/pages/account-orders', compact('order', 'wishlist', 'user', 'orders'));
    }

    public function add_wishlist(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Please login first.'
            ], 401);
        }

        $productId = $request->product_id;
        $exists = $user->wishlist()->where('product_id', $productId)->exists();

        if ($exists) {
            $user->wishlist()->detach($productId);
            return response()->json([
                'success' => true,
                'action' => 'removed',
                'message' => 'Item removed from wishlist.'
            ]);
        } else {
            $user->wishlist()->attach($productId);
            return response()->json([
                'success' => true,
                'action' => 'added',
                'message' => 'Item added to wishlist successfully'
            ]);
        }
    }
    public function wishlist()
    {
        $order = Order::where('user_id', Auth::id())->orderby('updated_at', 'desc')->count();
        $allwishlist = Wishlist::with('products')->where('user_id', Auth::id());
        $wishlists = $allwishlist->paginate(6);
        $wishlist = $allwishlist->count();
        $user = User::where('id', Auth::user()->id)->first();
        // dd($wishlist);
        return view('frontend/pages/account-wishlist', compact('wishlists', 'wishlist', 'user', 'order'));
    }

    public function wishlist_remove($id)
    {
        try {
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
        $order_details = OrderDetail::where('order_id', $order_id)->get();
        return view('frontend/order_details_modal', compact('order_details'));


    }

    public function user_dashboard(Request $request)
    {
        if ($request->isMethod('get')) {
            $address = Address::all();
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->count();
            $order = Auth::user()->orders->count();
            $user = User::where('id', Auth::user()->id)->first();
            // dd($user);
            return view('frontend/pages/account-dashboard', compact('address', 'wishlist', 'order', 'user'));
        }

    }

    public function address(Request $request)
    {
        if ($request->isMethod('get')) {
            $address = Address::all();
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
            $order = Auth::user()->orders;
            return view('frontend/pages/account-address', compact('address', 'wishlist', 'order'));
        }

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'zip_code' => 'required',
                'address1' => 'required',
            ])->validate();
            $address = Address::updateorCreate(['user_id' => $request->user_id, 'address1' => $request->address1, 'address2' => $request->address2, 'zip_code' => $request->zip_code]);

            $address->save();
            return redirect()->back()->with('success', 'Address Saved');

        }
        return false;
    }

    public function user_profile(Request $request)
    {
        if ($request->isMethod('get')) {
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->count();
            $order = Auth::user()->orders->count();
            $user = User::where('id', Auth::user()->id)->first();
            // dd($user);
            return view('frontend/pages/account-profile', compact('wishlist', 'order', 'user'));
        }
        if ($request->isMethod('post')) {
            $g_recaptcha_response = $request->input('g_recaptcha_response');
            $result = $this->getCaptcha($g_recaptcha_response);
            if ($result->success == true && $result->score > 0.5) {
                try {
                    $request->validate([
                        'first_name' => 'required',
                        // 'last_name' => 'required',
                        // 'email'=>'required|email',
                        'phone' => 'required',
                        'address' => 'required',
                        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]);

                    $user = Auth::user();
                    $data = [
                        'first_name' => $request->first_name,
                        // 'last_name' => $request->last_name,
                        // 'email' => $request->email,
                        'phone' => $request->phone,
                        'country' => $request->address
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
            } else {
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'You are Robot.'
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
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
            $order = Auth::user()->orders;
            return view('frontend/pages/change_password', compact('wishlist', 'order'));
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
    private function getCaptcha($secretKey)
    {
        $secret_key = env('SECRET_KEY');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret_key . "&response={$secretKey}");
        $result = json_decode($response);
        return $result;
    }
}
