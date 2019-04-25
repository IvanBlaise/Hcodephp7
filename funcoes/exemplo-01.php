<?php 


function ola(){

	$argumentos = func_get_args(); // mesmo não tendo argumentos inicialmente, se algum for passado essa função os recupera
	return $argumentos;
}

var_dump(ola("Bom dia",10));



 ?>