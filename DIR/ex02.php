<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$images = scandir("images");

$data = array();


foreach ($images as $img) {
	// if (in_array(needle, haystack)){
	// needle = quem é o alvo o que eu preciso, o que eu quero procurar
	//haystack = opções
	if (!in_array($img, array(".", ".."))){
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		//se não! for o . e o .. então faça

		$info = pathinfo($filename);
		//pathinfo é o nome do caminho completo /home/site/DIR/images/
		$info["size"] = filesize($filename);
		//array info ganha campo size - filesize colhe o size em bits do arquivo
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		//array info ganha campo modificado, filemtime retorna timestamp da ultima modificaçao
		$info["url"] = "http://187.86.193.130/DIR/" . $filename;
		//url concatenado com o nome do arquivo para poder ser acessado da pagina html
//		var_dump($info);

		array_push($data, $info);
		//coloca a INFO dentro da array data
	}
}

echo json_encode($data);
//exibi data como Json format.


//var_dump($images);



 ?>