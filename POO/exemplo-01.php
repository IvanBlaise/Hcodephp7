<?php 

class Pessoa{

	public $nome; // Atributo



	public function falar(){ // Método

		return "O meu nome é: ".$this->nome;
	}
}

$ivan = new Pessoa();
$ivan->nome="Ivan Carlos";

echo $ivan->falar();






 ?>