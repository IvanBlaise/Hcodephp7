<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);

imagestring($image, 5, 440, 350, "Ivan Carlos", $titleColor);

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//imagejpeg($image, "certificado_ivan - ".date("Y-m-d").".jpg", 10); // primeiro parametro é a imagem o segundo se quiser salvar na pasta e ai coloca o nome e o terceiro é a qualidade

imagejpeg($image); // só com a imagem ele mostra no browse
imagedestroy($image);

?>