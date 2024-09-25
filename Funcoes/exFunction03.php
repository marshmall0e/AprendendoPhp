<?php 

function ola($texto, $periodo = "Bom dia!"){

return "Olá $texto! $periodo<br>";

}

echo ola("Mundo");
echo ola("Victoria");
echo ola("Mariany");

?>

<!--Esse código define uma função chamada ola() que aceita um parâmetro $texto. A função retorna uma string que cumprimenta o texto passado, incluindo uma quebra de linha. O echo chama a função três vezes com diferentes argumentos: "Mundo", "Victoria" e "Mariany", resultando em três saudações exibidas na tela. -->