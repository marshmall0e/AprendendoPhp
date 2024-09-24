<?php 

$qualASuaIdade = 30;

$idadeInfantil = 12;
$idadeJovemAdulto = 18;
$idadeIdoso = 65;


if($qualASuaIdade < $idadeInfantil) {
    echo "Infantil";
} else if($qualASuaIdade < $idadeJovemAdulto) {
    echo "Jovem Adulto";
} else if($qualASuaIdade < $idadeIdoso){
    echo "Adulto";
} else {
    echo "Idoso"; 
}

/*Operador ternario*/ #? -> if #: - else


echo "<br>";
echo($qualASuaIdade < $idadeIdoso)?"Menor de Idade":"Maior de idade";

echo "<br>";

//meus testes

$salarioBaseClt = 1465;

$salarioDevJr = 3.750;
$salarioDevPleno = 6.500;
$salarioDevSenior = 11.680;

if ($salarioBaseClt < $salarioDevJr) {
    echo "Ta vendendo a alma pro capeta, vá estudar";
} else if ($salarioBaseClt < $salarioDevPleno) {
    echo "Continua estudando fi de rapariga";
} else if ($salarioBaseClt < $salarioDevSenior) {
    echo "Me diz pq desgraça tu ainda não esta estudando porra?";
} else {
    echo "Melhore bixa, vá estudar!";
}


?>