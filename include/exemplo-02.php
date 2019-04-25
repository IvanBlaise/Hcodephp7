<?php 

//include "inc/exemplo-01.php";// Include diferente do require e ainda permite utilizar arquivos externos
//require "inc/exemplo-01.php"; // require exige que o arquivo exista e esteja funcionando corretamente
require_once "inc/exemplo-01.php";// se o require já tiver sido chamado ele ignora as demais chamadasposteriores e não dá erro, o require puro dar erro se chamar mais de uma vez

echo  somar(10,30);

 ?>