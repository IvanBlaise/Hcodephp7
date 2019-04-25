<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios where idusuario= ?"); // Faz a query com os parametros 


$id = 3	;

$stmt->execute(array($id)); // Outra forma de substituir os parâmetros ao inves do bindParam

//$conn->rollback();
$conn->commit();

echo "commit"; 


 ?>