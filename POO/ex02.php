<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){

			return $this->modelo;

	}

	public function setModelo($modelo){

		$this->modelo = $modelo;
		//$this-modelo é o atributo lá em cima $modelo é o parametro da funcao

	}

	public function getMotor():float{

		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;

	}

	public function getAno():int{

			return $this->ano;

	}

	public function setAno($ano){

		$this->ano = $ano;
	}

	public function exibir(){

		return array("Modelo" =>$this->getModelo(),
					"motor"=>$this->getMotor(),
					"ano"=>$this->getAno()
					 );

	}
}


////fecho as declaração de classes


$gol = new Carro();
//$caravan->modelo = "Gol GT"; // comentado pois o atributo modelo é privado na classe desse objeto. Então Só metodos da propria classe conseguem modificalo ou exibilo ;)

$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2018");


print_r($gol->exibir());
echo "<br>";
var_dump($gol->exibir());


 ?>