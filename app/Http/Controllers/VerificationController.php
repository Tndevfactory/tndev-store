<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
     public function verifyEmailView()
    {
        // we use middleware verify to track verified route in webrouter // route profile-home-client
         return view('auth.verify-email');
    }


    public function verifyEmailLink(Request $request)
        {
         $user=Auth::user();

         if(!$user){
             return redirect()->back()
            ->with(['status' => 'user not found in our records', 'language'=> $request->language]);
         }

        $token=Str::random(30);

        $expiresAt=Carbon::now()->addMinutes(5);

        $language=$request->language;

        Cache::put('verif_link_token', $token, $expiresAt );

        MailController::sendVerificationMail($user->email, $token, $language);

        return redirect()->back()
            ->with(['status' => 'verif link re-sent to your email box', 'language'=> $request->language]);

     }

    public function handleVerifyCallback(Request $request)
    {

           if(Cache::get('verif_link_token') === $request->token){

            $user=Auth::user();


            if($user){
                $user->update(['email_verified_at'=> Carbon::now()]);
                //dd($user );
            }else{
                return 'user not found';
            }

        }else{

            return 'link expired , click resend verif link again';
        }

         return redirect()
            ->route('login', App::getLocale())
            ->with(['status' => 'verif ok', 'language'=> $request->language]);


            //  $role = Auth()->user()->roles()->first()->name;

            // if ($role == 'admin'){ return redirect()->route('profile-admin', Auth()->user()->id);

            // }elseif( $role == 'employee') { return redirect()->route('profile-employee', Auth()->user()->id);

            // }elseif( $role =='client'){ return redirect()->route('profile-client', Auth()->user()->id);

            // }elseif( $role =='vendeur'){ return redirect()->route('profile-vendeur', Auth()->user()->id);
            // }

           // return redirect()->route('profile-home-client');
    }


}
