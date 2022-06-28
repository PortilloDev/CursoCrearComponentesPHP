<?php

use App\AccessHandler;
use App\Authenticator;
use App\SessionManager;
use App\SessionArrayDriver;


require __DIR__ . '/../vendor/autoload.php';


class_alias('App\Facades\Access', 'Access');

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$container = \App\Container::getInstance();

\App\Facades\Access::setContainer($container);

$container->singleton('session', function() {

    $data = array(
        'user_data' =>array(
            'name' => 'Iván',
            'role' => 'teacher'
    )
    );

    $driver = new SessionArrayDriver($data);
    return  new SessionManager($driver);

});

$container->singleton('auth', function($container){

   return  new Authenticator($container->make('session'));

});

$container->singleton('access', function($container){

    return  new AccessHandler($container->make('auth'));
    
 });