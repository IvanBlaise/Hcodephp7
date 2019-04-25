<form action="#" method="post">
    <input name="cep" type="text" />
  
    <button type="submit">enviar</button> 
</form>

<?php 


$cep = $_POST["cep"];
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

foreach ($data as $key => $value) {

	print_r("<strong>".ucfirst($key).": "."</strong>".ucfirst($value)."<br>");

	
}

//print_r($data["logradouro"]."<br>");	
//print_r($data["bairro"]."<br>");	
//print_r($data["localidade"]."<br>");	


?>

