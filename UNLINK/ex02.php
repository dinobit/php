<?php 

if(!is_dir("images")) mkdir("images");

foreach s(candir("images") as $item) {
	if (!in_array($item, array(".",".."))){

		unlink("images/" . $item);

	}
}

echo "OK";

 ?>