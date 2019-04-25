<?php 
require_once("config.php");


echo session_save_path()."<br>";

session_destroy();

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Desabilitada";
		break;
	case PHP_SESSION_NONE:
		echo "sessões habilitadas, mas nenhuma existe";
		break;
	
	default:
		echo "sessões  habilitadas, e uma existe";
		break;
}

 ?>