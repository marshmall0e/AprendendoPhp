<?php 
//include e require

#Require obriga que o arquivo exista, o arquivo que vc esta incluindo, e que o esteja funcionando corretamente, caso o mesmo não funcionar ou não existir o require para a execução do codigo 

#Include tenta funcionar mesmo que o arquivo não exista ou esteja com algum tipo de problema 

#require_once irá mostrar apenas a primeira chamada do arquivo no codigo

/* Existe um diretorio chamado include pg que permite que o inclue traga arquivos direto de la */

var_dump("OK");
function somar ($a, $b) {
    return $a + $b;
}

?>