<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s l"); 

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s l");

echo $coiso;

 ?>