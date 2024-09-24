<?php 
$nome = "victoria kamilly";
$nomeMaiusculo = strtoupper(string: $nome);
$nomeMinusculo = strtolower(string: $nome);

echo $nome;
echo "<br>";
echo $nomeMaiusculo;
echo "<br>";
echo $nomeMinusculo;
echo "<br>";
echo ucwords($nome);
echo "<br>";
echo ucfirst($nome);
?>