<?php

$nome = "Thiago";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Andrey";
	echo $nome." agora no teste2";
}

teste();
echo "<br>";
teste2();

?>
