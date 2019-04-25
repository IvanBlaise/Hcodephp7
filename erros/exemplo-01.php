<?php 

function error_handler($code, $message, $file, $line){

	echo json_encode(array(

		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"linha"=>$line

	));

}

set_error_handler("error_handler");// indica qual a função que o php vai chamar quando der erro

$total =  100 / 0 ;


 ?>