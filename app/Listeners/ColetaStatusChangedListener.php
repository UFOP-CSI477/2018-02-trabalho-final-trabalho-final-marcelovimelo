<?php

namespace App\Listeners;

use App\Events\ColetaStatusChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ColetaStatusChangedListener
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
     * @param  ColetaStatusChanged  $event
     * @return void
     */
    public function handle(ColetaStatusChanged $event)
    {
        //
    }
}
