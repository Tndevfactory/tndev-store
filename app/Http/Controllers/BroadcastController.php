<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Events\BroadCastMessageEvent;
use App\Events\BroadCastMessageReplyEvent;

class BroadcastController extends Controller
{
    // send view
    public function sendBroadcastView(){
       
        return view('sender');
    }

    // post broadcast
    public function sendBroadcast(Request $request){
        $message = $request->msg;
        
        Log::info('pusher triggered');
        event(new BroadCastMessageEvent($message));
        return redirect()->back();
    }
   

    // receive broadcast
    public function receiveBroadcast(){
         return view('receiver');
    }

     // post broadcast
    public function sendBroadcastReply(Request $request){
        $message = $request->msg;
      
        event(new BroadCastMessageReplyEvent($message));
        return redirect()->back();
    }
}
