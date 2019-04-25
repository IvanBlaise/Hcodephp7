<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 255, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);



imagestring($image, 5, 350, 300, utf8_decode("Tome no cu!!! "), $titleColor);

header("Content-type: image/jpeg");

//imagejpeg($image, "certificado_ivan - ".date("Y-m-d").".jpg", 10); // primeiro parametro é a imagem o segundo se quiser salvar na pasta e ai coloca o nome e o terceiro é a qualidade

imagejpeg($image); // só com a imagem ele mostra no browse
imagedestroy($image);

?>