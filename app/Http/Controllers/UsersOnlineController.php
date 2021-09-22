<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class UsersOnlineController extends Controller
{
    public static function getUsers(){
     
        $users = User::get();
      
        return  View::share('users', $users );
    }
}
