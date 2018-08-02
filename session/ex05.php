<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

echo session_status();
echo "<br>";
switch (session_status()) {
	case PHP_SESSION_DISABLE:
		echo "Sessões desabilitadas";
		break;
	case PHP_SESSION_NOME:
		echo "Sessão Habilitada mas não existente";

	case PHP_SESSION_ACTIVE:
		echo "Sessão Habilitada e existente";
	default:
		# code...
		break;
}

 ?>