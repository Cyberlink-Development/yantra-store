<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function forgot_password_page(){
        return view('frontend.pages.forgot-password');
    }

    public function recovery_mail(Request $request){
        // Validate if given email exists
        /*$user = User::where('email', '=', $request->email)->first();

        if ($user === null) {
            return back()->with('error', "Provided email doesnt exist");
        }*/
        $request->validate([
            'email'=>'required|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->first();

        // Generate token and store it to database
        $token = Str::random(64);

        $timestamp = Carbon::now()->toDateTimeString();

        DB::table('password_resets')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>$timestamp
        ]);

        // Send Mail to user
        //return new PasswordResetMail($token, $user->first_name, $user->email);
        Mail::to($request->email)->send(new PasswordResetMail($token, $user->first_name, $user->email));
        return redirect()->route('login-page')->with('success', 'Password reset link sent your email');

    }

    public function reset_password(Request $request){
        if($request->isMethod('get')){
            // Validate the token
            $token = $request->token;

            $reset_field = DB::table('password_resets')->where('token', $token)->first();
            if($reset_field==null){
                $error = "Invalid token";
                return view('frontend.pages.password_reset_form', compact('error'));
            }

            // Validate time limit
            $current_time = Carbon::now();
            $token_time = Carbon::parse($reset_field->created_at);
            $difference = $current_time->diffInMinutes($token_time);

            if($difference>60){
                $error = "Token time expired, send request again";
                return view('frontend.pages.password_reset_form', compact('error'));
            }

            $email = $reset_field->email;

            return view('frontend.pages.password_reset_form', compact('email', 'token'));
        }

        if($request->isMethod('post')){
            $request->validate([
                'password'=>'required|min:6|confirmed'
            ]);

            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($request->get("password"));
            $user->save();

            $reset_field = DB::table('password_resets')->where('token', $request->token)->delete();

            return redirect()->route('login-page')->with('success', 'Password is successfully resetted');
        }
    }
}
