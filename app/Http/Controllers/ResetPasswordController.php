<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;



class ResetPasswordController extends Controller
{
    public function passwordEmailForm()
    {
        return view('auth.password-email-form');
    }


    public function passwordResetLink(Request $request)
    {

       $email= $request->validate(['email' => 'required|email']);

       $user=User::where('email', $email)->first();
        if(!$user){
             return redirect()->route('password.email', App::getLocale())
            ->with(['status' => 'email not found in our records', 'language'=> $request->language]);
         }

        $token=Str::random(30);

        $expiresAt=Carbon::now()->addMinutes(5);

        $language=$request->language;

        MailController::sendResetPasswordMail($request->email, $token, $language);

        Cache::put('reset_link_token', $token, $expiresAt );

        return redirect()->route('password.email', App::getLocale())
            ->with(['status' => 'reset link sent to your email box', 'language'=> $request->language]);
    }


    public function passwordResetForm(Request $request)
    {
        return view('auth.password-reset-form', ['token' => $request->token]);
    }


    public function passwordUpdate(Request $request, User $user)
    {
        $validated_data=$request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $validated_data['password']=Hash::make($request->password);

        if(Cache::get('reset_link_token') === $validated_data['token']){

            $user=User::where('email', $validated_data['email'])->first();

            if($user){
                $user->update(['password'=> $validated_data['password']]);
            }else{
                return 'user not found';
            }

        }else{

            return 'link expired , click forget password again';
        }

         return redirect()
            ->route('login', App::getLocale())
            ->with(['status' => 'password reset', 'language'=> $request->language]);

    }

}
