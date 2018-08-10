<?php 

class Pessoa{

	public $nome; //atributo

	public function falar(){  //metodo

		return "O meu nome é ".$this->nome;

	}

}


$Thiago = new Pessoa();
$Thiago->nome = "Thiago Andrey";
echo $Thiago->falar();




 ?>