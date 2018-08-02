<?php 

session_id('6pg8pjl2aqk50fmhggv822a0b5');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>