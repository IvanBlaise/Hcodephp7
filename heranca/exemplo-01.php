<?php 

/**
 * 
 */
class Documento 
{
	private $numero;

	public function getNumero(){
		return $this->numero;
	} 
	public function setNumero($numero){

		$this->numero = $numero;

	}
	
}
/**
 * 
 */
class Cpf extends Documento
{
	public function validar():bool
	{
		$numeroCPF = $this->getNumero();
		// Validação do cpf
		return true;
	}
	
}

$cpf = new Cpf();

$cpf->setNumero("79645690587");

var_dump($cpf->validar());

echo "<br>";

echo $cpf->getNumero();




?>