<?php  
$a = 50;
$b = 40;

// Com esse simbolo, chamado de "space ship", se $a for maior ele retorna 1, se forem iguais 0 e se b for maior retorna -1
var_dump($a <=> $b);
if (($a<=>$b) ==-1){
	echo "<br>B é maior";
}else{
	echo "<br>A é maior ou são iguais";
}


?>