<?php 
require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios)*/

//$usu = new Usuario();
// Carrega apenas 1 usuario
/*$usu->loadById(1);

echo $usu;	*/

// Carrega uma lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista);*/

// Carrega uma lista de usuarios buscando pelo login

/*$search = Usuario::search("Carlos");
echo json_encode($search);*/

// Carrega um usuario passando o login e a senha

/*$login = new Usuario();
$login->login("Carlos Magno", "123456");

echo $login;*/

// Inserir usuario novo

/*$aluno = new Usuario("Welingthon", "58741");


$aluno->insert();
echo $aluno;*/

// Update

/*$pessoa = new Usuario();

$pessoa->loadById(11);

$pessoa->update("Professor", "7777");

echo $pessoa;*/

// Delete

$usuario = new Usuario();
$usuario->loadById(9);

$usuario->delete();
echo $usuario;


 ?>