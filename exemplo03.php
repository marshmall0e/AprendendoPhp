<?php 

//tipos de dados basicos 
//strings

$nome = 'victoria';
$site = 'patinhasplanet.com';

//inteiros

$ano = 2002;

//ponto flutuante/ floats
$salario = 5500.99;

//booleanos 
$bloqueado = false;

//tipos de dados compostos
//Arrays
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

//orientação objeto

$nascimento = new DateTime();

var_dump($nascimento);

//file Resources

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

//valor nulo(não existe) vs vazio(ausencia de valor)

$nulo = NULL;
$vazio = '';

?>