<?php 

$file = fopen("log.txt","a+"); //w+ criar um novo arquivo e escreve. a+ só adiciona novo conteudo e não recria o arquivo
fwrite($file, date("Y-m-d H:i:s"));

fwrite($file, "\r");// quebra a linha
fwrite($file, "\n");// gera uma nova linha
fwrite($file, "\t"); //comando para um TAB
fwrite($file, "Testando segunda linha");
fwrite($file, "\r");// quebra a linha
fwrite($file, "\n");// gera uma nova linha

fclose($file);

echo "Arquivo criado com sucesso";


 ?>