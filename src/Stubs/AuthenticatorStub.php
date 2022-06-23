<?php

namespace App\Stubs;

use App\User;
use App\Interfaces\AuthenticatorInterface;


class AuthenticatorStub implements AuthenticatorInterface
{
    public function check()
    {
        return true;
    }

    public function user()
    {
        return new User([
            'role' => 'admin'
        ]);
    }
}