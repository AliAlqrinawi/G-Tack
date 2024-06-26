<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Notifications\NewOrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewOrderNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        // Send the notifciation
        $order->vendor->user->notify(new NewOrderNotification($order));
        // $order->customer->user->notify(new NewOrderNotification($order));

    }
}
