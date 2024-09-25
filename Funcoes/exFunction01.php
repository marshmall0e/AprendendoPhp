<?php 

function ola(){

    return "Olá Mundo! <br>";

}

echo ola();
$frase = ola();

echo strlen($frase);
?> 

<!--Esse código define uma função chamada ola() que retorna a string "Olá Mundo!" seguida de uma quebra de linha. Em seguida, a função é chamada e seu resultado é exibido com echo, mostrando "Olá Mundo!". O valor retornado é também armazenado na variável $frase, e strlen($frase) é usado para calcular o comprimento da string, que é então exibido. Assim, o código ultimate resulta na exibição da mensagem e do número de caracteres.-->