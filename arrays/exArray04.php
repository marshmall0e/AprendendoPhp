<?php 

$json = '[{"nome":"Victoria","idade":22},{"nome":"Mariany","idade":20}]';

$data = json_decode($json, true); #json decode transaforma o json de volta para um array

var_dump($data);
?>