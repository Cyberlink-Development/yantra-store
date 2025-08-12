<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyMail;
use App\Model\VerifyUser;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register_page()
    {
        return view('frontend.pages.account-signup');
    }

    protected function store(Request $request)
    {
        try{
            $request->validate([
                'first_name' => 'required',
                // 'last_name'=>'required',
                'email' => 'required|unique:users,email',
                // 'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                // 'phone_number'=>'required|max:10',

            ]);

            $password = Str::random(10);
            // $password1 = substr(str_shuffle( 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{<>?'), 0, 12);
            dd($password, $request->all());
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => bcrypt($password),
                'phone' => $request->phone_number,
                'roles' => 'user'
            ]);
            if($user)
            {
                return redirect()->route('')->with('success','');
                Mail::to($user->email)->send(new \App\Mail\UserPasswordMail($user, $password));
            }

            $verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => Str::random(20)
            ]);
            // if ($user && $verifyUser) {
            //     return new VerifyMail($verifyUser->token, $user->id, $user->name);
            //     Mail::send(new VerifyMail($verifyUser->token, $user->id, $user->name));
            //     return "sent mail";

            // }

            Session::flash('success', 'Please verify your email to complete registration process');
            return redirect()->intended(route('index'));
        }catch(ValidationException $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => $e->validator->errors()->all()
            ]);
        }catch(Exception $e){
            return redirect()->back()->with([
                'error' => true,
                'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
            ]);
        }
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (isset($verifyUser)) {
            $user = $verifyUser->users;
            if (!$user->verified) {
                $verifyUser->users->verified = 1;
                $verifyUser->users->save();
                $status = "Your e-mail is verified. You can now login.";
            } else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect()->intended(route('login-page'))->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect()->intended(route('login-page'))->with('success', $status);
    }
}
