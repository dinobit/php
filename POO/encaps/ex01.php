<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

	class Pessoa{

		public $nome = "Rasmus Lerdorf";
		protected $idade = 48;
		private $senha = "123456";

		public function verDados(){

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}


	}

$obj = new Pessoa();

echo $obj->nome . "<br>"; // nome aparece pq é publico

//echo $obj->idade . "<br>"; // warning apresenta que não pode acessar idade pq ele é protejido

//echo $obj->senha; // tmb não pode acessar pq senha é privado.

$obj->verDados(); //todos itens são mostredos pois o metodo trabalha dentro da propria classe do objeto 

 ?>