<?php

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

?>