<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

 $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); // Faz a query com os parametros 

$login = "Carlos Magno";
$password = "123456";
$id = 1;

$stmt->bindParam(":LOGIN", $login); // e aqui substitui os parametros
$stmt->bindParam(":PASSWORD", $password);// e aqui substitui os parametros
$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "Dados alterados"; 


 ?>