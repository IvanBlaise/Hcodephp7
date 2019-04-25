<?php 

$nome = "images";

if (!is_dir($nome)){

	mkdir($nome); //criar um diretorio
	echo "Diretorio $nome criado com sucesso";
}else {

	rmdir($nome);
	echo "já existe o diretorio: $nome foi removido";
}






 ?>