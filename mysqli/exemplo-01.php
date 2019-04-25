<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

	echo "O Error: ". $conn->connect_error ;
}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?,?)");

$stmt->bind_param("ss", $login,$senha);

$login = "user";
$senha = "9999";

$stmt->execute();

$login = "Ivan";
$senha = "3105";
$stmt->execute();

 ?>