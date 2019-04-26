<form method="post">
	
	<input type="text" name="entrada">
	<button type="submit">Enviar</button>


</form>

<?php 

if(isset($_POST['entrada'])){


	//echo strip_tags($_POST['entrada']); //Esse ele retira as tag colocadas maliciosamente no input

	echo htmlentities($_POST['entrada']); // e aqui ele converte as tags em textos


}





?>