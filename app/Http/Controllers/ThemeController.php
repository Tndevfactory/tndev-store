<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class ThemeController extends Controller
{
    public function theme($val){
      
        Cache::forget('theme');

        if($val === "true"){
           Cache::put('theme', 'dark');
        }else {
           Cache::put('theme', 'light');
        }
        
        $data =[
            'theme' => Cache::get('theme'),
            'checked' => $val
        ];
        return $data;
    }
}
