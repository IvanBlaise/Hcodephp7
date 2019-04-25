<?php 

$frase = "CABO BLINDADO PARA DETECTOR DE CHAMA";

// encrontra a posição da palavra dentro da frase
$palavra = "PARAr";
$q = strpos($frase, $palavra);

// pega apenas o que vem antes da palavra 
//$texto = substr($frase, 0, $q);

//pega apenas o que vem depois da palavra
//$texto2 = substr($frase, $q+strlen($palavra), strlen($frase));



var_dump($q);
//echo ($texto2."<br>");
//echo (md5("ivan2018"));





 ?>