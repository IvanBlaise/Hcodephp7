<?php
$anoNascimento =1980;
$nome1="Ivan";
$sobreNome= "Carlos";
    
echo $nome1 ."". $sobreNome;
exit;    
echo $anoNascimento;
echo '<br/>';
// Tirar variavel da memória, ou seja, apagar variavel
//unset($anoNascimento);

// isset é pra ver se a variavel existe
if(isset($anoNascimento)){
    echo $anoNascimento;
}


?>