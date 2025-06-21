<?php

namespace App\Nibble;

use App\Nibble\Events\UserSignupEvent;
use App\Nibble\WebProjection\WebUser;
use Illuminate\Support\Facades\DB;
use Nibble\Event;
use Nibble\Projection;

class WebProjection extends Projection
{
    protected WebUser $webUser;

    public function __construct()
    {

        DB::connection('sqlite')->statement("
            CREATE TABLE IF NOT EXISTS web_users (
              id STRING PRIMARY KEY,
              firstName TEXT,
              lastName TEXT,
              email TEXT,
              password TEXT
            );
        ");
    }

    public function applyEvent(Event $event): void
    {
        switch($event::class)
        {
            case UserSignupEvent::class:
                $payload = $event->getPayload();
                $webUser = new WebUser();
                $webUser->id = $payload['userId'];
                $webUser->firstname = $payload['firstName'];
                $webUser->lastName  = $payload['lastName'];
                $webUser->email = $payload['email'];
                $webUser->password = $payload['password'];
                $webUser->save();
            break;
        }
    }
}
