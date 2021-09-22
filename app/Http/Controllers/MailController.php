<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeNewUser;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public  static function sendResetPasswordMail($email, $token, $language  ){

        $data=[
            'title'     => 'Reset Password',
            'subject'   => 'Reset Password',
            'corps'     => 'please click link below to reset password',
            'language'  => $language ,
            'token'     => $token ,
            'recipient' => $email ,
        ];

        Mail::to($data['recipient'])->send(new ResetPasswordMail($data));

        return 'sent mail';
    }

    public static function sendWelcomeMail(User $user){

        $data=[
            'title' => 'hello Sir',
            'subject' => 'Welcome to shoptn',
            'corps' => 'welcome mail after registration',
            'recipient' => $user->email ,
        ];

        Mail::to($data['recipient'])->send(new WelcomeNewUser($data));

        //return 'sent mail';
    }

    public static function sendBulkMail(User $user){

        $users = User::get();

        foreach ($users as $user) {
            # code...
        }

        $data=[
            'title' => 'hello Sir ',
            'subject' => 'bulk mail all users shoptn',
            'corps' => 'welcome mail after registration with scheduler and queue',

        ];

        Mail::to($user->email)->send(new WelcomeNewUser($data));

        //return 'sent mail';
    }

    public static function sendVerificationMail($email, $token, $language ){

       $data=[
            'title'     => 'Verification Mail',
            'subject'   => 'Verification Mail',
            'corps'     => 'please click link below to Verification your Mail',
            'language'  => $language ,
            'token'     => $token ,
            'recipient' => $email ,
        ];

        Mail::to($data['recipient'])->send(new VerificationMail($data));

        return 'sent mail';

    }

}
