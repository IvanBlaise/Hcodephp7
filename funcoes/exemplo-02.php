<?php 
$a = 10;

function ola(&$a){

	$a+= 50;

	return $a;

}

echo ola($a)."<br>";

echo $a."<br>";




 ?>