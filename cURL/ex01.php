<?php 

$cep = "12231160";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//(biblicota, o q c quê, quer a resposta de volta? bolena 0 e 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //por ser https

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data["logradouro"]);

 ?>