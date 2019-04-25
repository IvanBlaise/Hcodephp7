<?php 
class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){ //Método construtor
		
		$this->logradouro=$a;
		$this->numero=$b;
		$this->cidade=$c;
	}
	public function __destruct(){ //é chamado depois que utiliza a função unset ou quando a class é tirada da memoria
		echo ("Destruiu");
	} 

	public function __toString(){

		return $this->logradouro."<br>".$this->numero."<br>".$this->cidade."<br>";
	}




}
$meuEndereco = new Endereco("rua a", "55", "Salvador");

echo ($meuEndereco);




 ?>