<?php 
require_once("config.php");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "xw6imr2");
//tipo do banco: nome do banco;host=Onde ta o banco, "usuario", "senha"

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id=1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dado apagado, ok!";

?>