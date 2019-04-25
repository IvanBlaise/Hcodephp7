<?php

//$nome = (int)$_GET["a"];
//$nome = (int)$_GET["a"];

//var_dump($nome);
//echo ($nome);

// Pega o ip de quem está acessando
$ip = $_SERVER["REMOTE_ADDR"];

// Pega o caminho de quem está acessando
$caminho = $_SERVER["SCRIPT_NAME"];

//echo $ip;

echo $caminho;

?>