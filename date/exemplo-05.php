<?php 


$dt = new DateTime();
$periodo = new DateInterval("P15D"); // recupera um intervalo

echo $dt->format("d/m/Y H:i:s")."<br>";

$dt->add($periodo); //soma 15 dias

echo $dt->format("d/m/Y H:i:s");




 ?>