<?php

namespace App\Listeners;

use App\Events\PostViews;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreasePostViews
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
    public function handle(PostViews $event)
    {
        $this->increaseViews($event->post);
    }

    private function increaseViews($post)
    {
        $post->views++;
        $post->save();
    }
}
