<?php

// Tipos basicos
$nome = "Ivan";
$site='www.fluxo.vom.br';

$ano=1980;
$salario = 5000.99;
$bloqueado = false;


// Objeto e array

$frutas = array("maça", "manga", "banana");

//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);


// Tipos especiais

$arquivo = fopen("EFD_STP_FEV_2019.txt", "r" );
var_dump($arquivo);

$nulo = null;
$vazio = "";

?>