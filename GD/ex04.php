<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_w = 256;
$new_h = 256;

//var_dump(getimagesize($file));
//retorna um array com informaç~oes sobre o arquivo

/*
$dados = getimagesize($file)
$old_w = data[0]; //pega a info 0 da array dados = largura da imagem original
$old_H = data[1]; //pega a info 1 da array dados = altura da imagem original
*/

list($old_w, $old_h) = getimagesize($file);
//funcao list faz a mesma coisa que as três linahs comentadas acima.

$new_img = imagecreatetruecolor($new_w, $new_h);
$old_img = imagecreatefromjpeg($file);

//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
//imagecopyresampled(image destino, imagem original, x da img destino, y da img destino, x da img original, y da imagem original, tamano x final, tamanho y final, tamanho x da img original, tamanho y da imgm original)
imagecopyresampled($new_img, $old_img, 0, 0, 0, 0, $new_w, $new_h, $old_w, $old_h);

imagejpeg($new_img);

imagedestroy($new_img);
imagedestroy($old_img);
 ?>