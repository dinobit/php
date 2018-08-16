<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$file = fopen("log.txt", "w+");
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "arquivo criado com sucesso";

 ?>