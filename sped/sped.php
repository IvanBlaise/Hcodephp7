<?php 





//$usuarios = $sql->select("select * from tb_usuarios order by idusuario");
//print_r($usuarios);

/*$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}
*/
$file =  fopen("EFD_STP_FEV_2019.txt","r+");
$filenovo =  fopen("novo.txt","w+");
//fwrite($file, implode(",", $headers)."\r\n");

while (!feof($file)){
	
	var_dump($value);	
	
}//termino de linha


fclose($file);
fclose($filenovo);
//echo implode(",", $headers);

 ?>