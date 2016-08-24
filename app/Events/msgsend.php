<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Auth ;

class msgsend extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $data;
    public $channels ;

    public function __construct($channels,$body)
    {
        $this->channels = $channels;
        $this->data = array(
            'msg'=> $body,
            'userid'=> Auth::user()->id
        );
    }

    public function broadcastOn()
    {
        return [$this->channels];
    }
}
