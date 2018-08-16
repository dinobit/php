<form method="POST" enctype="multipart/form-data">
	
<input type="file" name="fileUpload">

<button type="submit">Send</button>

</form>


<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["fileUpload"];

	if ($file["error"]){

		throw new Exception("Error: " . $file["error"]);
		
	}

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

		echo "Upload Realizado com sucesso!";

		var_dump($file); /// pra vc ver os dados da array $file que recebeu as informações do arquivo. Note que ele tem um campo error que é um int = 0 quando não existe erro.
		//não seria melhor ser boolean? Mas não consegui reproduzir um erro pra ver que info ele retorna.

	}else{

		throw new Exception("Não foi possivel realizar o uploda.");
	}

}

 ?>