<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if ((!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename))&&(!file_exists($dir2 . DIRECTORY_SEPARATOR . $filename))) {

	$filezim = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	fwrite($filezim, date("Y-m-d H:i:s"));

	fclose($filezim);

}



if (file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);

echo "Arquivo Movido da pasta 1 para 2!";
} else{

	rename($dir2 . DIRECTORY_SEPARATOR . $filename, $dir1 . DIRECTORY_SEPARATOR . $filename);

	echo "Arquivo Movido da pasta 2 para 1!";
}


 ?>