<?php

namespace LaravelForum\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\NOtifications\VerifyEmail as BaseVerifyEmail;

class VerifyEmail extends VerifyEmail implements ShouldQueue
{
    use Queueable;

    
}
