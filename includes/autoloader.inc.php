<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2019-12-12
 * Time: 09:45
 */

spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path.$classname.$extension;

    if (!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}