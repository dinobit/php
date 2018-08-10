<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

abstract class Animal{

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "anda";
	}
}

class Cachorro extends Animal {

	public function falar(){

		return "late";
	}
}

class Gato extends Animal {

	public function falar(){
		return "mia";
	}
}

class Passaro extends Animal{

	public function falar(){
		return "canta";
	}

	public function mover(){
		return "voa e ".parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "--------------------------<br/>";
$garfild = new Gato();

echo $garfild->falar() . "<br>";
echo $garfild->mover() . "<br>";

echo "--------------------------<br/>";
$picapau = new Passaro();

echo $picapau->falar() . "<br>";
echo $picapau->mover() . "<br>";

 ?>