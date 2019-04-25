<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
header('Content-type: text/html; charset=ISO-8859-1');
// Abre o Arquvio no Modo r (para leitura)
$arquivo = fopen ('EFD_34213025000608.txt', 'r+');
$palavra="C170";
// Lê o conteúdo do arquivo 
while(!feof($arquivo))
{
//Mostra uma linha do arquivo
$linha = fgets($arquivo,4096);
$q = strpos($linha, $palavra);
if ($q!=false) {

	$linha = rtrim($linha)."|";
}
echo($linha.'<br>');
}

// Fecha arquivo aberto
	fclose($arquivo);
?>