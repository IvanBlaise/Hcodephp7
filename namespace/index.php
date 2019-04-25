<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Ivan Carlos");
$cad->setEmail("ivancaros@gmail.com");
$cad->setSenha("1234");

//echo $cad;

$cad->registrarVenda();

 ?>