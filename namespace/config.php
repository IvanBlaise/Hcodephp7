<?php 

spl_autoload_register(function($nameClass){

	var_dump($nameClass);
	$dirclass = "class"; // a pasta das classes
	$filename = $dirclass.DIRECTORY_SEPARATOR.$nameClass.".php"; // O path da classe

	if(file_exists($filename)){

		require_once($filename);
	}

});





 ?>