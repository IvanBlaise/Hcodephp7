<?php 
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Ivan',
	'idade'=>38
));
array_push($pessoas, array(
	'nome'=>'Márcia',
	'idade'=>40
));

echo json_encode($pessoas);

 ?>