<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv","w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		array_push($data, $value);
	} // end foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

} //end foreach de linha

fclose($file);

//echo implode(",", $headers);
//funcao implode espera 2 paramentes 1 um string que é o que vc quer colocar para dividir um item do outro de sua string - o segunda é o array que você quer aplicar a regra.

//print_r($headers);


 ?>