<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Documentos{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;
	}

}

class CPF extends Documentos{

	
	public function validar():bool{

		//aqui você não tem acesso ao private $numero
		// mas você tem acesso a funcão publica getNumero()
		//então você poderia conseguir o numero com

    	$numeroCPF = $this->getNumero();


		return true; // aqui vai a validação do CPF
	}
}

$doc = new CPF();

$doc->setNumero("12345678909");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

 ?>