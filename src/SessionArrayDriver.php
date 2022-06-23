<?php

namespace App;

use App\Interfaces\SessionDriverInterface;

class SessionArrayDriver implements SessionDriverInterface
{
    protected $data;

    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    public function load()
    {
        return $this->data;
    }
}