	<?php
//a recebe o valor via barra de endereço
$nome = (int)$_GET["a"];

//var_dump($nome);
//
//$ip = $_SERVER["REMOTE_ADDR"]; //pega o IP de quem acessa
$ip = $_SERVER["SCRIPT_NAME"]; // pega o local acessado


echo $ip;

?>
