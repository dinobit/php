<?php 

function ola($texto = "mundo", $periodo="Bom dia"){

	return "Olá $texto! $periodo!<br>";

}

echo ola();
echo ola ("", "Boa noite");
echo ola("mundo", "Boa Tarde");
echo ola("Thiago");
echo ola("Everbary", "");

 ?>