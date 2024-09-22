<?php 

$frase = "A repetição é a mãe da retenção. ";

$palavra = "mãe";

$q = strpos($frase,"mãe");

$texto = substr($frase, 0 , $q);

var_dump($q);
print "<br>";
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($palavra);

echo "<br>";

var_dump($texto2);
?>