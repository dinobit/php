<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

function __autoload($nomeClasse){
	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
		//var_dump($nomeClasse);
}

//require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(80);

 ?>