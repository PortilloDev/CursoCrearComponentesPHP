<?php 

namespace App\Interfaces;

interface AuthenticatorInterface
{
    public function check();

    public function user();
}