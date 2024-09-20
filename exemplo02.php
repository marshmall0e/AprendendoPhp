<?php 
/*
$anoNascimento = 2002;

$nomeCompleto = "";
*/

$nome1 = "Victoria";

$sobrenome = "Kamilly";

$nomeCompleto = $nome1 . ' ' . $sobrenome;

echo $nome1;

echo "<br>";

echo $nomeCompleto;

echo "<br>";

//unset($nome1); - ira destruir a variavel 

if(isset($nome1)) {
    echo $nome1;
};

?>