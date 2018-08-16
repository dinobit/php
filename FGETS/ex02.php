<?php 

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));
//carrega o arquivo todo em binario com file_get_contents, mas codifica em base64 com o base64_encode

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$b64encode =  "data:" . $mimetype . ";base64," .$base64;

 ?>

 <a href="<?=$b64encode?>" target="_blank"> Link para Imagem </a>

 <img src="<?=$b64encode?>">