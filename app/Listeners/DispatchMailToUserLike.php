<?php

namespace App\Listeners;

use App\Mail\LikePostUpdatedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class DispatchMailToUserLike
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
    public function handle($event)
    {
        $post = $event->post;

        foreach ($post->usersLike as $user) {
            Mail::to($user->email)->send(new LikePostUpdatedMail($post));
        }
    }
}
