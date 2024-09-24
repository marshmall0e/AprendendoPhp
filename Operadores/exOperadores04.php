<?php 
//operadores de comparação

$a = 55.0; #float
$b = 55;

var_dump($a > $b);

echo"<br>";

var_dump($a < $b);

echo"<br>";

var_dump($a = $b);
#Apenas um igual irá atribuir um valor de uma variavel para outra 

echo"<br>";

var_dump($a == $b);
#Comparar valores var_dump($a == $b);

echo"<br>";

var_dump($a === $b); 
#Para comparar os tipos é utilizado três = var_dump($a === $b);

echo"<br>";

var_dump($a != $b); 
#!= é utilizado para informar diferenças

echo"<br>";

var_dump($a !== $b); 
#!== para validar se são identicos e valida também o tipo 

?>