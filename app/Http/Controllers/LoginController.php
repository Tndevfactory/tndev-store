<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeMessageJob;
use Illuminate\Support\Facades\Auth;
use App\Events\NewUserRegistredEvent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\MailController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\UsersOnlineController;

class LoginController extends Controller
{

    public function loginFormDisplay()
    {
        return view('auth.login');
    }

    public function registerFormDisplay()
    {
        return view('auth.register');
    }

    public function authLogin(Request $request)
    {

       // Cart::destroy();
        $validatedData = $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($validatedData)) {

             //Cache::put('last-seen'.Auth::user()->id, Carbon::now());
            $role = Auth::user()->roles()->first()->name;



            //dd($role) ;
            //dd(Auth::user()->id);
             //echo Auth()->user()->id ;

            if ($role == 'admin'){
                return redirect()
                ->route('profile-admin',    [ Request()->language, Auth()->user()->id ] );

            }elseif( $role == 'employee') {
                return redirect()
                ->route('profile-employee', [ Request()->language, Auth()->user()->id ]);

            }elseif( $role =='client'){
                 return redirect()
                 ->route('profile-client',   [ Request()->language, Auth()->user()->id ]);

            }elseif( $role =='vendeur'){
                 return redirect()
                 ->route('profile-vendeur', [ Request()->language, Auth()->user()->id ]);

            }elseif( $role == null){
                 return redirect()->back()->with('message', 'no auth-id --> found');

            }

        } else {
            return redirect()->back()->with('message', 'Mot de passe ou email invalide');
        }

    }

    /**
     * handle register ops
     */

    public function authRegister(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6', 'string'],
        ]);

        $validatedData['img_uri'] = '/img/empty_photo/empty-user.jpg';
        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

    // add default role client 3
        $user->roles()->attach(3);

    // sent welcome mail using event listner (free use without necesserly to observe model)
        // event(new NewUserRegistredEvent($user));

    // the event now is triggered in model user with array dispatchesEvents and model instance is injected, userobserver give us ability
    // to observe user model states


    // the welcome msg will be sent in background with queue job
        SendWelcomeMessageJob::dispatch($user);

        if (!is_null($user)) {
            Auth::login($user);

            event(new Registered($user));
            return redirect()->route('verification.notice');

        } else {

            return redirect()->back()->with('message', 'probleme d inscription');
        }

    }

    /**
     * handle logout
     */

    public function authLogout(Request $request)
    {
        Cache::forget('user-online'.Auth::user()->id);
        Cache::forget('last-seen'.Auth::user()->id);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
