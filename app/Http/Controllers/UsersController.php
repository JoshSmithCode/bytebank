<?php

namespace App\Http\Controllers;

use App\Nibble\Events\UserSignupEvent;
use App\Nibble\EventStore;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function signup(EventStore $eventStore, Request $request)
    {
        $input = $request->all();

        $userSignupEvent = new UserSignupEvent;

        $userSignupEvent->setFirstName($input['first-name']);
        $userSignupEvent->setLastName($input['last-name']);
        $userSignupEvent->setEmail($input['email']);
        $userSignupEvent->setPassword($input['password']);

        $eventStore->store($userSignupEvent);

        return redirect('/');
    }
}
