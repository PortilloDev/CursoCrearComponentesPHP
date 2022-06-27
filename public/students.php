<?php 

use App\Container;


require (__DIR__ . '/../bootstrap/start.php');

function StudentsController()
{
    $access = Container::getInstance()->make('access');
    if ( !$access->check('student')) {
    
        abort404();
    }
    view('students', compact('access'));
}

StudentsController();