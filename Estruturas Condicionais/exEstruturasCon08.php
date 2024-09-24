<?php 
//while

$condicao = true;

while ($condicao) {
    $numero = rand(1,10);
    if ($numero === 3) { 
        echo "TRÊS!!! ";
        $condicao = false;
    }
    echo $numero . " ";
}

echo "<br>";

/*O primeiro bloco gera e exibe números aleatórios até que 3 apareça, enquanto o segundo aplica um desconto repetidamente ao total de 150 até que ele fique igual ou menor a 100, exibindo o resultado final. 
*/ 

//do while

$total = 150;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;
?>


