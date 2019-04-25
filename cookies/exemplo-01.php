<?php 

$data = array(
	"empresa"=>"Fluxo Solutions"
);


setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "Ok";



 ?>