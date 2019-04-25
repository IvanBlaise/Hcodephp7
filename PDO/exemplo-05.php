<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

 $stmt = $conn->prepare("delete from tb_usuarios where idusuario= :ID"); // Faz a query com os parametros 


$id = 2;

$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "Dados Apagados"; 


 ?>