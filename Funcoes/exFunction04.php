<?php

$a = 10;

function trocaValor(&$b){
    $b += 50;

    return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
?>

<!--Esse código demonstra o uso de passagem de parâmetro por referência em PHP. A variável $a é inicializada com o valor 10. A função trocaValor() recebe um parâmetro $b que é passado por referência (indicado pelo &), permitindo que qualquer alteração dentro da função afete a variável original.

Quando trocaValor($a) é chamada pela primeira vez, $b (que referencia $a) recebe 50, alterando $a para 60. A função retorna 60, que é exibido. Na segunda chamada, $b agora é 60 (já que é uma referência), e ao somar mais 50, $a se torna 110. O resultado final exibe 110 para a última chamada, mostrando a alteração de $a.

Assim, a saída será:

Primeira chamada: 60
Segunda chamada: 110
Valor final de $a: 110.-->