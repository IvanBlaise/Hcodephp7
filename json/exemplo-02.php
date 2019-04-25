<?php 
$json = '[{"nome":"Ivan","idade":38},{"nome":"M\u00e1rcia","idade":40}]';

$data = json_decode($json,true); // se não colocar o true ele gera como objeto.

var_dump($data);

 ?>