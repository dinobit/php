<?php 
require_once("config.php");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "xw6imr2");
//tipo do banco: nome do banco;host=Onde ta o banco, "usuario", "senha"

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "Jose";
$password = "qazwsx";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido ok!";

?>