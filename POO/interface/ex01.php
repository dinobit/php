<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

	public function acelerar($velocidade){
		echo "Acelerou" . $velocidade . "km/h";
	}

	public function freiar($velocidade){
		echo "Frenou" . $velocidade . "km/h";
	}

	public function trocarMarcha($marcha){
		echo "Marcha" . $marcha;
	}

}

$carro = new Civic();

$carro->trocarMarcha(3);

 ?>