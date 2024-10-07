<?php 

// Inicia um bloco try-catch para tratar exceções
try {
    // Lança uma nova exceção com uma mensagem e um código de erro
    throw new Exception("Houve um erro.", 400);
} catch (Exception $e) {
    // Captura a exceção lançada e executa este bloco
    // Converte os detalhes da exceção em um formato JSON e os exibe
    echo json_encode(array(
        "message" => $e->getMessage(), // Mensagem de erro da exceção
        "line" => $e->getLine(),       // Linha onde a exceção foi lançada
        "file" => $e->getFile(),       // Nome do arquivo onde a exceção foi lançada
        "Code" => $e->getCode()        // Código de erro da exceção
    ));
}

?>
