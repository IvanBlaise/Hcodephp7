<?php 

for($i=0;$i<=100;$i+=5){

	if ($i>=20 && $i<=80) continue;
	if($i===90) break;

	echo $i."<br>";
}


echo "Chegou no 90";
 ?>