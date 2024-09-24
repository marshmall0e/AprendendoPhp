<?php 
/*O comando for em PHP é usado para executar um bloco de código repetidamente, com um contador que incrementa ou decrementa em cada iteração, permitindo o controle do número de repetições.*/ 


#traduzindo linha abaixo: Este código implementa um loop for que itera de 0 a 9, com $i sendo incrementado em 1 a cada passagem. A cada iteração, o valor atual de $i é impresso seguido de uma quebra de linha (<br>), resultando na exibição sequencial dos números de 0 a 9 em linhas separadas. É uma forma simples de demonstrar iteração e saída em PHP.

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

#Traduzindo a linha abaixo: Este código utiliza um loop for para iterar de 0 a 999, incrementando $i em 5 a cada iteração. A instrução if verifica se $i está entre 201 e 799; se sim, o comando continue faz com que o loop pule a execução do echo, resultando na impressão apenas dos valores fora desse intervalo. Assim, ele gera uma lista de números que não estão entre 201 e 799, todos separados por quebras de linha.
for ($i = 0; $i < 1000; $i+=5) {
    if ($i > 200 && $i < 800) continue; 
    echo $i . "<br>";
}


#Traduzindo a linha abaixo: Este código utiliza um loop for que itera de 0 a 90, incrementando $i em 10 a cada iteração. Em cada passagem, o valor de $i é impresso seguido de uma quebra de linha (<br>), resultando na exibição dos múltiplos de 10 até 90. É uma maneira eficiente de gerar uma sequência numérica específica em PHP.
for ($i = 0; $i < 100; $i+=10) {
    echo $i . "<br>";
}

#Traduzindo a linha abaixo: Este código implementa um loop for que itera de 0 a 999, incrementando $i em 5 a cada iteração. A primeira instrução if verifica se $i está entre 200 e 800; se verdadeiro, o comando continue faz o loop pular essa iteração. A segunda instrução if verifica se $i é igual a 900; se sim, o comando break encerra o loop. Portanto, o código imprime os valores de $i que estão fora do intervalo de 200 a 800, parando antes de atingir 900. Isso resulta em uma sequência de números de 0 a 995, excluindo os valores indesejados.

for ($i = 0; $i < 1000; $i+=5) {
    if ($i >= 200 && $i <= 800) continue; 
    if ($i === 900) break;
    echo $i . "<br>";
}
?>