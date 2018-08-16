<?php 
//Classe extende da classe PDO que é padrao do PHP
class Sql extends PDO {
	
	private $conn;  //variavel conexao

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","xw6imr2");

	}
	//metodo construtor: é chamado toda vez que um novo objeto é instanciado com a Classe SQL.
	//esse metodo já cria uma conexão com o banco de dados conectando seu objeto automaticamente.

	private function setParams($statment, $parameters = array()){
				//recebe os steatements e dados(parameters) que é um array padrao
		foreach ($parameters as $key => $value) {
					
					$this->setParam($statment, $key, $value);
					//lembra do ":ID,$id".. .é isso
				
				}

	}

	private function setParam($statment, $key, $value){
		//Param sem S porque é um parametro Só recebe o parametro da outra funcao Params
		//a chave e o valor
		$statment->bindParam($key, $value);
		//faz o statement do parametro
	}

	public function query($rawQuery, $params = array()){
					//rawQuery significa query bruta, os params por padrao serao um array
		$stmt = $this->conn->prepare($rawQuery);
				//stmt so funciona nesse metodo.
		$this->setParams($stmt, $params);
			//para par a a funcao os stetementes e os parametros
		$stmt->execute();
			//executa os stetements
		return $stmt;
			//retorna o objeto
	}

	public function select($rawQuery, $params = array()):array{
			//esse metodos já retorna um array
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
			//FETCH ASSOC vem só os dados associativos sem um monte de numeros
	}

}

 ?>