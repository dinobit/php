<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5 , 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5 , 440, 350, "Thiago Andrey Ferreira", $titleColor);
imagestring($image, 3 , 440, 370, "Concluído em: ".date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d")."jpg", 10);
//imagem, nome, qualidade de 1 a 100 %

imagedestroy($image);

 ?>