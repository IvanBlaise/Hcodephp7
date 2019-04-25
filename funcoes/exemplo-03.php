<?php 

function soma(...$valores){//pode ser passados varios parametro e em diferentes quantidades
	return array_sum($valores);
}


echo soma(2,2,3);
echo "<br>";
echo soma(2,2,2,2,2,2,2,2,2,2);
 ?>