<?php 

// Cria um array associativo com dados a serem armazenados no cookie
$data = array(
    "empresa"=> "Hcode Treinamentos", // Adiciona um par chave-valor para a empresa
);

// Define um cookie chamado "NOME_DO_COOKIE" com o valor do array em formato JSON
// O cookie expira em 1 hora (3600 segundos a partir do momento atual)
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

// Exibe a mensagem "OK" na tela
echo "OK";

?>
