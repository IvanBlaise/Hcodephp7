<?php 

$numero = 9;
//Estrutura do IF
if($numero==0){
	echo "É Zero";
}else if ($numero==5){
	echo "É Cinco";
}elseif ($numero==9){//tanto faz junto ou separado
	echo "É Nove";
}else{
	echo "É Dez";
}
echo "<br>";

echo ($numero<5)?"Menor que cinco":"Maior que Cinco"; // Operador ternário


 ?>