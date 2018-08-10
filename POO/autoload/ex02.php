<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


function incluirClasses($nomeClasse){
	if (file_exists($nomeClasse."php") === true){
	require_once($nomeClasse."php");
	}
}

spl_autoload_register("incluirClasses"); // classes locais
spl_autoload_register(function($nomeClasse){

	if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse."php") === true){
	require_once($nomeClasse."php");
	}

});

$carro = new DelRey();

$carro->acelerar(80);

 ?>