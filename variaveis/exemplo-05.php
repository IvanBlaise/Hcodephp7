<?php  
$nome = "Ivan";

teste();	

function teste(){
	global $nome;
	echo $nome;
}

?>