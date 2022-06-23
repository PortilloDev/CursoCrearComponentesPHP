<?php

namespace App;

use Closure;

class Container
{
    protected $bindings = [];
    protected $share = [];
    public function bind($name, $resolver)
    {
        $this->bindings[$name] = [
            'resolver' => $resolver,
        ];
    }
    
    public function make($name)
    {
        if (isset( $this->share[$name])) {
            
            return  $this->share[$name];
        
        }
        
        $resolver =   $this->bindings[$name]['resolver'];

        if ($resolver instanceof Closure) {

            $object = $resolver($this);
            
        } else {

            $object = new $resolver;
        }

        return $object;
    }
    
    public function instance($name, $object)
    {
        $this->share[$name] = $object;


    }
}
