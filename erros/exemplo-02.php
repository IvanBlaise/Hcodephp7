<?php 

error_reporting(E_ALL & ~E_NOTICE); // para mostrar os erros e não mostrar os NOTICES (o ~é negando)


$nome = $_GET["nome"];


 ?>


 <h1><center><?=$nome;?></center></h1>