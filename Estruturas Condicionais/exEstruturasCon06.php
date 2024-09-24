<?php 
#foreach = para cada
/*O comando foreach em PHP é uma estrutura de controle projetada para iterar facilmente sobre arrays e objetos. Ele permite acessar cada elemento de um array, atribuindo seu valor a uma variável temporária durante cada iteração, o que simplifica a manipulação de dados. A sintaxe básica é foreach ($array as $valor), onde $valor representa o elemento atual, facilitando a leitura e a escrita do código, especialmente em comparação com loops tradicionais. É particularmente útil em situações onde a ordem dos elementos não é crítica e se busca clareza no código.*/

$meses = array(
    "Janeiro","Fevereiro","Março",
    "Abril", "Maio","Junho",
    "Julho", "Agosto","Setembro",
    "Outubro","Novembro","Dezembro"
);

foreach ($meses as $index => $mes) {  
    echo "Indice: ". $index ."<br>";
    echo "O mês é: " .$mes. "<br>";
}
?>