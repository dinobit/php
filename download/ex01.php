<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename  =basename($parse["path"]);

//$file = fopen($basename, "w+");
$file = fopen("logoGoogle.png", "w+"); //mudando o nome do arquivo.q

fwrite($file, $content);
//escreve dentro do arquivo (recurso, conteudo);
//ta escrevendo o conteudo binario do arquivo dentro do $file

fclose($file);
//fecha o arquivo

 ?>

 <img src="<?=$basename?>">