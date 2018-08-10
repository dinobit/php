<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function($nameClass){
	
	$dirClass = "class";
	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	//$filename = str_replace("\\", "/", "classes" . DIRECTORY_SEPARATOR . $nome . ".php"); 
    $filename = str_replace("\\", "/", "class" . DIRECTORY_SEPARATOR . $nameClass . ".php");

    // path = caminho e nome do arquivo

	if (file_exists($filename)){ // Quando o esperado é um TRUE não é precisa colocar o == true na condição

		require_once($filename);

	}

});


 ?>