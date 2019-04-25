<?php 
$texto = "2245";
$texto2= "2245";

if (strcasecmp($texto, $texto2)==0){
	$texto2 = null;
	var_dump($texto."<br>");
	var_dump($texto2);
}



 ?>