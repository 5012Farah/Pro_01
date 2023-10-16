<?php 

spl_autoload_register('my_autoload');
function my_autoload($className)
{
	$paths = array('Controller/','DB/');

	foreach ($paths as $path) {
		if(file_exists($full_path = $path . $className . '.php')){
			require_once $full_path; 
		}
	}
}

session_start();
