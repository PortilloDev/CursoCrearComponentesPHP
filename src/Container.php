<?php

namespace App;

use Closure;
use ReflectionClass;
use App\Exceptions\ContainerException;

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
 
    public function instance($name, $object)
    {
        $this->share[$name] = $object;


    }

    public function make($name,  array $arguments = array())
    {
        if (isset( $this->share[$name])) {
            
            return  $this->share[$name];
        
        }
        
        if (isset( $this->bindings[$name])) {

            $resolver =   $this->bindings[$name]['resolver'];

        } else {
            $resolver = $name;
        }

        if ($resolver instanceof Closure) {

            $object = $resolver($this);

        } else {
           
            $object = $this->build($resolver, $arguments);
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
