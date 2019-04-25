<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

/**
 * 
 */
abstract class Automovel implements Veiculo
{
	public function acelerar($velocidade)
	{

		echo "O veiculo acelerou ate: ".$velocidade;
	}
	public function frenar($velocidade)
	{
		echo "O veiculo freiou na velocidade: ".$velocidade;

	}
	public function trocarMarcha($marcha)
	{

		echo "O veiculo engatou a marcha: ".$marcha;

	}

}
class Delrey extends Automovel{

	public function empurrar(){


	}
}

$carro = new Delrey();
$carro->acelerar(100);

 ?>