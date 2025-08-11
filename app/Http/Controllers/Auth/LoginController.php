<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminLogin()
    {
        return view('auth.login');
    }
    public function adminAuthenticate(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');
            $remember = $request->filled('remember');
            $user = User::where('email', $credentials['email'])->first();
            if (!$user) {
                return back()->with([
                    'error' => true,
                    'message' => "User doesn't exist."
                ]);
            }
            if (!Auth::attempt($credentials, $remember)) {
                return back()->with([
                    'error' => true,
                    'message' => "Incorrect password or unauthorized access."
                ]);
            }

            $authUser = Auth::user();
            if ($authUser->verified != '1' || $authUser->roles !== 'admin') {
                Auth::logout();
                return back()->with([
                    'error' => true,
                    'message' => "You do not have permission to access this page."
                ]);
            }
            return redirect()->route('dashboard')->with([
                'success' => true,
                'message' => 'Welcome to dashboard'
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
    public function login_page(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('frontend.pages.account-signin');
        }
    }

    public function login(Request $request)
    {
        try{

            // if ($request->isMethod('post')) {
                $request->validate([
                    'email' => 'required',
                    'password' => 'required'
                ]);
                $credentials = $request->only('email', 'password');
                $remember = $request->has('remember') ? true : false;
                $user = User::where('email', $credentials['email'])->first();
                if (!$user) {
                    return back()->with([
                        'error' => true,
                        'message' => "User doesn't exist."
                    ]);
                }
                if (!Auth::attempt($credentials, $remember)) {
                    return back()->with([
                        'error' => true,
                        'message' => "Incorrect password"
                    ]);
                }
                $authUser = Auth::user();
                if ($authUser->verified != '1') {
                    Auth::logout();
                    return back()->with([
                        'error' => true,
                        'message' => "Please verify your email first"
                    ]);
                }
                if ($authUser->roles == 'user') {
                    return redirect()->route('index')->with([
                        'success' => true,
                        'message' => 'User login successfull'
                    ]);
                }
                if ($authUser->roles == 'wholeseller') {
                    return redirect()->route('index')->with([
                        'success' => true,
                        'message' => 'User login successfull'
                    ]);
                }
            // }
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        // return redirect()->intended(route('login-page'));
    }
}
