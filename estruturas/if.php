<?php

$qualASuaIdade = 81;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

echo "Crianço";

} else if ($qualASuaIdade < $idadeMaior){

	echo "Rebelde";

}elseif ($qualASuaIdade < $idadeMelhor){

	echo "Trampista";

}else{

	echo "OldMan";
}

echo "<br>";

echo($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";

?>