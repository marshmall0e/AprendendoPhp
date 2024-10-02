<?php 
//verifica se diretorio existe e se não existir ele cria 

$name = "images";

if(!is_dir($name)) {
    mkdir($name,0, true);
    echo "Diretório $name criado com sucesso!";
} else {
    rmdir($name);
    echo "Já existe o diretório: $name, foi removido";
}

?>