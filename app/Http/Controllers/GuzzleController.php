<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class GuzzleController extends Controller
{
    public function GuzzleView(Request $request){
        
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/$request->id")->collect();

        return  view('guzzle.guzzle', compact('response') );
        
    }

}
