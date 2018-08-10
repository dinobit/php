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

class Programador extends Pessoa {

	public function verDados(){

			echo get_class($this) . "<br>";

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}

	//extende tudo da classe pesso, manos o que for privado;

}

$obj = new Programador();

$obj->verDados(); //esta chamando o metodo da classe Programador. Como esta
//classe não tem acesso ao $senha por ser um atributo privado, deve aparecer um warning na 
//bagaça

 ?>