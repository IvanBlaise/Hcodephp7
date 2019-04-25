<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php 
header('Content-type: text/html; charset=ISO-8859-1');
function elimina_posicao_array ($array, $pos)
{
    if (array_key_exists ($pos, $array))
        unset ($array[$pos]);
    
    return $array;
}

$path = 'EFD_SANTANA.txt';
$rs = file( $path );



//para alterar a bagaça:
for ($a=0; $a<count($rs) ;$a++) { 
	for ($i=1; $i < count($rs) ; $i++) { 
		if ($rs[$a]===$rs[$i]) {
			$rs = elimina_posicao_array($rs, $i);
			$rs=array_filter($rs);
			$rs=array_values($rs);
			$i+= 1;

		}
	}

}


// para salvar, 

file_put_contents( 'ELIMINADO.txt' , implode( PHP_EOL, $rs ) );




?>