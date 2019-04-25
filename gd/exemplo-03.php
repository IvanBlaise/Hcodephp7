<?php

$image = imagecreatefromjpeg("certificado.jpg");

$gray = imagecolorallocate($image, 100, 100, 100);
$titleColor = imagecolorallocate($image, 0, 0, 0);
$font1 = "C:".DIRECTORY_SEPARATOR."xampp".DIRECTORY_SEPARATOR."htdocs".DIRECTORY_SEPARATOR."gd".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Ultra-Regular.ttf";

$font2 = "C:".DIRECTORY_SEPARATOR."xampp".DIRECTORY_SEPARATOR."htdocs".DIRECTORY_SEPARATOR."gd".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."GreatVibes-Regular.ttf" ;



imagettftext($image, 32, 0, 320, 250, $titleColor, $font1,"Certificado");

imagettftext($image, 32, 0, 375, 350, $titleColor, $font2, "Ivan Carlos");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

 
header("Content-type: image/jpeg");

//imagejpeg($image, "certificado_ivan - ".date("Y-m-d").".jpg", 10); // primeiro parametro é a imagem o segundo se quiser salvar na pasta e ai coloca o nome e o terceiro é a qualidade

imagejpeg($image); // só com a imagem ele mostra no browse

imagedestroy($image);

?>