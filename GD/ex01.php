<?php 

//phpinfo();

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Content-Type: image/png"); //define objeto imagem

$image = imagecreate(256, 256); // x e y tamanho em px

$black = imagecolorallocate($image, 0, 0, 0); // padrao de cores R G B de 0 a 255
$red = imagecolorallocate($image, 255, 0, 0); // padrao de cores R G B de 0 a 255

//imagestring(image, font, x, y, string, color)
imagestring($image, 5, 60, 120, "Dinobit", $red); // fonte de 1 a 5 - 

imagepng($image); //reenderiza a imagem na tela

imagedestroy($image);


 ?>