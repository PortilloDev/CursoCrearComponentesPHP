<?php 


//No se importa la clase Access, porque se crea como alias en el fichero
//start.php


require (__DIR__ . '/../bootstrap/start.php');



function TeacherController()
{

    if ( !Access::check('teacher')) {
    
        abort404();
    }
    view('teachers');
}

TeacherController();