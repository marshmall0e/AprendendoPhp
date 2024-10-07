<?php 
// Verifica se o cookie com o nome "NOME_DO_COOKIE" está definido
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
     // Se o cookie existir, decodifica o seu valor (que deve estar em formato JSON) e exibe o resultado
    var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));
}
?>