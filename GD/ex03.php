<?php 

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 255, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);
$black = imagecolorallocate($image, 0, 0, 0);
$fonte1 = "/home/site/GD/Bevan-Regular.ttf";
$fonte2 = "/home/site/GD/Playball-Regular.ttf";

//imagettftext(image, size, angle, x, y, color, fontfile, text) <-sintaxe
imagettftext($image, 32, 0, 250, 150, $black, $fonte1, "CERTIFICADO de GATÃO");
//imagettftext($image, 32, 0,  450, 150, $titleColor, "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 440, 350, $titleColor, $fonte2, "Thiago Andrey");



imagestring($image, 3 , 440, 370, "Concluído em: ".date("d/m/Y"), $grey);

header("Content-Type: image/jpeg");

imagejpeg($image);
//imagem, nome, qualidade de 1 a 100 %

imagedestroy($image);



 ?>