<?php 

$data = array(
	"empresa"=>"Dinobit"
	);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600 );
//nome do cookie, dados no coockie, tempo atual + segundos para expirar... orbigadatorio


 ?>