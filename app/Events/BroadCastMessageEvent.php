<?php

namespace App\Events;
use Pusher\Laravel\Facades\Pusher;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BroadCastMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    
    public function broadcastOn()
    {
          //echo $this->message; die;
          
          // no event will be triggred if the worker is sleeping, run cmd below to rise worker
          // php artisan queue:work --tries=3  
          // data implicitly inserted as a payload
          
         return new Channel('my-channel');
    }
    
    public function broadcastAs()
    {
         return 'my-event';
    }

 
    public function broadcastWith()
    {
         
        return ['Mohamed message:' => $this->message];
    }

     public function broadcastWhen()
    {
        return true;
        //return $this->user == 'lotfi';
    }
}
