<?php 

try{

	throw new Exception("Houve um erro. Ferro pardau!", 400);
	// erro, numero do erro - a seu controle

} catch(Exception $e){
	//$e por convenção
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
		));



}

 ?>