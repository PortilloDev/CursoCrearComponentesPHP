<?php

namespace App;

use Closure;
use ReflectionClass;
use App\Exceptions\ContainerException;

class Container
{
    protected $bindings = [];
    protected $share = [];

    protected static $instance;


    public static function getInstance()
    {
        if(static::$instance == null) {
            static::$instance = new Container;
        }

        return static::$instance;
    }


    public static function setInstance(Container $container)
    {

        static::$instance = $container;

    }

    public function bind($name, $resolver, $shared = false)
    {
        $this->bindings[$name] = [
            'resolver' => $resolver,
            'shared' =>  $shared,
        ];
    }
 
    public function instance($name, $object)
    {
        $this->share[$name] = $object;


    }

    public function singleton($name, $resolver)
    {
        $this->bind($name, $resolver, true);
    }

    public function make($name,  array $arguments = array())
    {
        if (isset( $this->share[$name])) {
            
            return  $this->share[$name];
        
        }
        
        if (isset( $this->bindings[$name])) {

            $resolver =   $this->bindings[$name]['resolver'];
            $shared = $this->bindings[$name]['shared'];

        } else {
            $resolver = $name;
            $shared = false;
        }

        if ($resolver instanceof Closure) {

            $object = $resolver($this);

        } else {
           
            $object = $this->build($resolver, $arguments);
        }


        if($shared) {
            
            $this->shared[$name] = $object;
        }

        return $object;
    }
    

    public function build($name, array $arguments = array())
    {
        $reflection = new ReflectionClass($name);

        if ( ! $reflection->isInstantiable()) {
            throw new InvalidArgumentException("$name is not instantiable");
        }

        $constructor = $reflection->getConstructor();

        if (\is_null($constructor)) {
            return new $name;
        }

       
        $constructorParameters = $constructor->getParameters();
       
        $dependencies = array();

        foreach($constructorParameters as $constructParameter){
         
            $parameterName = $constructParameter->getName();
        
            
           
            if (isset($arguments[$parameterName])) {

                if( $constructParameter->isOptional()){
                    $dependencies[] = $constructParameter->getDefaultValue();
                    
                } else {
                    $dependencies[] = $arguments[$parameterName];
                }
              
                
                continue;
                
            } elseif ($constructParameter->isOptional()) {
                $dependencies[] = $constructParameter->getDefaultValue();
                continue;
            }
         

            try {
               
                $parameterClass = $constructParameter->getClass();

            }catch(ReflectionException $error) {
             
                throw new ContainerException("Unable to build [$name]: " . $error->getMessage(), null, $error);
                
            }

            if ($parameterClass != null) {
                
                $parameterClassName = $parameterClass->getName();
                $dependencies[] = $this->build($parameterClassName);

           } else {

                throw new ContainerException("Please, provide the value of the parameter [$parameterName]");

           }
            
        }
        
        return $reflection->newInstanceArgs($dependencies);
    }
 
}
