<?php 
require_once("config.php");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "xw6imr2");
//tipo do banco: nome do banco;host=Onde ta o banco, "usuario", "senha"

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Joaquim";
$password = "istraorbinar";
$id=2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Alteração ok!";

?>