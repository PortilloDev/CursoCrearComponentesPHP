<?php 

//No se importa la clase Access, porque se crea como alias en el fichero
//start.php

require (__DIR__ . '/../bootstrap/start.php');

function StudentsController()
{
 
    if ( !Access::check('student')) {
    
        abort404();
    }
    view('students');
}

StudentsController();