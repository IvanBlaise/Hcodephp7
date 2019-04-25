<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

 $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Jose";
$password = "88888";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido Certo"; 


 ?>