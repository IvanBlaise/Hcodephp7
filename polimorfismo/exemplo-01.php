<?php 
abstract class Animal{

	public function falar(){

		return "som";
	}
	public function mover(){
		return "Anda";
	}
}
class Cachorro extends Animal{

	public function falar(){

		return "Late";
	}


}
class Gato extends Animal{

	public function falar(){

		return "Miar";
	}

}

class Passaro extends Animal{

	public function falar(){

		return "Canta";
	}
	public function mover(){

		return "Voa e ".parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar()."<br>";

echo $pluto->mover()."<br>";

echo "-------------------------------"."<br>";

$ivan = new Gato();

echo $ivan->falar()."<br>";

echo $ivan->mover()."<br>";

echo "-------------------------------"."<br>";

$sabia = new Passaro();

echo $sabia->falar()."<br>";

echo $sabia->mover();


 ?>