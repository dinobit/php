<?php 

function soma(int ...$valores){

	return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(200,45,55);
echo "<br>";
echo soma(2.5,3);

 ?>