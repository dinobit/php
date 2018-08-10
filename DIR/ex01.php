<?php 

$name = "images";

if (!is_dir($name)){
	mkdir($name);
	echo "Diretorio ".$name ."Criado";
} else {
	rmdir($name);
	echo "Diretorio já existe, foi removido";
}



 ?>