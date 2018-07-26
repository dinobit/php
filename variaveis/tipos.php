<?php

//tipos de variaveis basicos
$nome = "João de Barro"; // string
$site = 'www.dinobit.br'; //string2

$ano = 1981; // numero

$salario = 5500.99; //float

$bloqueado = false; //bolean falso ou verdadeiro apenas.

////////////////////////////////////////////

//tipos compostos

$frutas = array("abacaxi","laranja","melancia");
                   //0       1          2

echo $frutas[2]; // deve plotar a fruta na posição 2 a partir do zero
echo "<br>";
$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////////////////////////////
echo "<br>";
//tipos especiais

$arquivo = fopen("tipos.php", "r");
//var_dump($arquivo);

//difrente de
$vazio = "";


	?>
