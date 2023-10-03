<?php

spl_autoload_register("my_autoload");
function my_autoload($className)
{
    $paths = array("Controller/","Model/","Class/");
     foreach ($paths as $path) {
        $get_paths = $path . $className . ".php";
        include_once $get_paths;
    }
}