<?php 

namespace App\Facades;

use Exception;
use App\Container;

abstract class Facade
{
    
    protected static $container;
    

    public static function setContainer(Container $container)
    {
        static::$container = $container;
    }

    public static function getContainer()
    {
        return static::$container;
    }


    public static function getAccesor()
    {
        throw new \Exception('Please define the getAccessor method in your facade');
    }

    public static function getInstance()
    {
       return  static::getContainer()->make(static::getAccesor());
    }

    public static function __callStatic($method, $args)
    {

        $object = static::getInstance();

        /**
         *  call_user_func_array => Llamar a una llamada de retorno con un array de parámetros
         * @param return el valor devuelto por la llamada de retorno, o false en caso de error.
         */

         switch (count($args)) {
            case 0:
                return $object->$method();
            case 1:
                return $object->$method($args[0]);
            case 2:
                return $object->$method($args[0], $args[1]);
            case 3:
                return $object->$method($args[0], $args[1], $args[2]);
            default:
                return  call_user_func_array([$access, $method], $args);
         }
       

    }

}