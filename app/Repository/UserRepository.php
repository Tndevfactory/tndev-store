<?php

namespace App\Repository;

use Carbon\Carbon;
use App\Models\User;

class UserRepository
{
    CONST CACHE_KEY='USER';

    public static function getKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY.".$key";
    }
    
    public static function all($orderby)
    {

        $key="all";
        return cache()->remember(self::getKey($key), Carbon::now()->addMinutes(5), function() use($orderby){
            return User::orderBy($orderby)->get();
        });

    }

   

    
}