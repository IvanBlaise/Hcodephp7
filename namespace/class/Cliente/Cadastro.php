<?php
namespace Cliente;

class Cadastro extends \Cadastro { // para estender uma classe que está em outra pasta

	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente ".$this->getNome();
	}

}





 ?>