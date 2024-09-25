<?php

function soma(int ...$valores):string{
    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
?>

<!-- Esse código define uma função chamada soma que aceita um número variável de argumentos inteiros (indicado por int ...$valores) e retorna uma string. A função utiliza array_sum() para calcular a soma dos valores passados.
 Chamada soma(2, 2): A função soma 2 + 2, retornando 4, que é exibido com var_dump(), mostrando o tipo e o valor (int(4)).

Chamada soma(25, 33): Soma 25 + 33, resultando em 58, que é exibido normalmente.

Chamada soma(1.5, 3.2): Aqui, mesmo que os valores sejam números de ponto flutuante, o PHP automaticamente converte esses números para inteiros, resultando em 0 (já que 1.5 e 3.2 se tornam 1 e 3, respectivamente).

Vale destacar que a função sempre retorna um valor inteiro, mas o tipo de retorno está definido como string, o que pode gerar uma discrepância. -->