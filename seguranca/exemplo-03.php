<?php 

$pasta = "arquivos"	;
$permissao = "0775";

if(!is_dir($pasta)) mkdir($pasta, $permissão);
/*
Códigod de permissão pra criação de pastas:

0 - sem permissão
1 - execução
2 -  gravação
3 - execução e gravação
4 - leitura
5 - leitura e execução
6 - leitura e gravação
7 - leitura, execução e gravação - permissão total
*/

echo "Diretório criado com sucesso!";








?>