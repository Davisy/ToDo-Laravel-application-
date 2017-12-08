<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class StudentAdded extends Event
{
   use SerializesModels;
   public $name;
   public function __construct($name)
   {
       $this->name = $name;
   }
   public function broadcastOn()
   {
       return [];
   }
}