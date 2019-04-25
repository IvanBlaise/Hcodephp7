<?php 

class Pessoa{

	public $nome = "Ivan Carlos";
	protected $idade = 38; // Protected so encherga na mesma classe
	private $senha = "123456";



	public function verDados(){

		echo "Nome: ".$this->nome."<br>"."Idade: ".$this->idade."<br>"."Senha: ".$this->senha."<br>";

	}

}

$objeto = new Pessoa();

echo $objeto->nome."<br>";

$objeto->verDados();

 ?>