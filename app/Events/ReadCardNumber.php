<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReadCardNumber implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $cardNumber;
    public function __construct($cardNumber)
    {
        //
        $this->cardNumber = $cardNumber;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */

    public function broadcastWith()
    {
        return ['cardNumber' => $this->cardNumber];
    }
    public function broadcastOn(): Channel
    {
        return new Channel('read-card');
    }
}
