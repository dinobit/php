<?php 

require_once("config.php");

$conn = new mysqli("localhost", "root", "xw6imr2", "dbphp7");

if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


$data = array();

//while ($linha = $result->fetch_aray()){
while ($linha = $result->fetch_assoc()){

		array_push($data, $linha);

		var_dump($linha);

 }


echo json_encode($data);

 ?>
