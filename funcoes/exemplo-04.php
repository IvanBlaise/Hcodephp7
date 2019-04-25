<?php 

function soma(float ...$valores):float{//pode ser passados varios parametro e em diferentes quantidades e depois dos ":" vc pode dizer qual o tipo de retorno
	return array_sum($valores);
}


var_dump(soma(2.5,2.3,3));
echo "<br>";
echo soma(2,2,2,2,2,2,2,2,2,2);
 ?>