<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

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

//ninguem pode simplesmente instanciar um Automovel. Ele precisa dizer que automovel é.
//entao:

class DelRey extends Automovel{
	public function empurrar(){
		echo "empurar";
	}


}

$carro = new Automovel();
$carro = new DelRey();

$carro->acelerar(230);

?>