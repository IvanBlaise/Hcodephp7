<?php 
$diaDaSemana =8;//date("w");

switch ($diaDaSemana+1){
	case 0:
	echo "Domingo";
	break;
	case 1:
	echo "Segunda";
	break;
	case 2:
	echo "Terça";
	break;
	case 3:
	echo "Quarta";
	break;
	case 4:
	echo "Quinta";
	break;
	case 5:
	echo "Sexta";
	break;
	case 6:
	echo "Sábado";
	break;
	default: // Se não for nenhuma das opções acima executa esse
	echo "Data Inválida";
	break;


}


 ?>
