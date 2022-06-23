<?php 

namespace App;

use App\Interfaces\AuthenticatorInterface;

class AccessHandler
{

    /**
     * @var \App\Authenticator
     */
    protected $auth;

    /**
     * @param \App\Interfaces\AuthenticatorInterface $auth;
     */
    public function __construct(AuthenticatorInterface $auth) 
    {
         $this->auth = $auth;
    }


    public function check($role)
    {
        return $this->auth->check() && $this->auth->user()->role === $role;
    }
}