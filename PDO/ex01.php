<?php 
require_once("config.php");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "xw6imr2");
//tipo do banco: nome do banco;host=Onde ta o banco, "usuario", "senha"

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
//steatment iniciado

$stmt->execute();
//executado

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//traz o resultado fatiado

//var_dump($results);

foreach ($results as $row) {
	# code...
	foreach ($row as $key => $value) {
		# code...
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

echo "==========================================================<br>";

}

 ?>