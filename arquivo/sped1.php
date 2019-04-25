<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php 
header('Content-type: text/html; charset=ISO-8859-1');
$path = 'EFD_34213025000608.txt';
$rs = file( $path );
$palavra = "C170";


//para alterar a bagaça:
for ($a=0;$a<count($rs);$a++) { 

	$q = strpos($rs[$a], $palavra);

	if ($q!=false) {
		
		$rs[$a] = rtrim($rs[$a])."|";

	}else{

		$rs[$a] = rtrim($rs[$a]);

	}
}


// para salvar, 

file_put_contents( 'EFD_SANTANA.txt' , implode( PHP_EOL, $rs ) );




?>