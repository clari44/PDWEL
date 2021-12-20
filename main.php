<?php
 
$data_json = file_get_contents('data.json');
 
$decoded_json = json_decode($data_json, false);
 
echo $decoded_json->nome;
 
echo $decoded_json->idade;
 
echo $decoded_json->endereco;
 
?>