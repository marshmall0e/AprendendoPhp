<?php 

// Define uma função chamada trataNome que recebe um parâmetro $name
function trataNome($name) {
    // Verifica se $name está vazio
    if (!$name) {
        // Lança uma exceção se nenhum nome foi informado
        throw new Exception("Nenhum nome foi informado", 1);
    }

    // Exibe o nome com a primeira letra em maiúscula
    echo ucfirst($name) . "<br>";
}

try {
    // Chama a função trataNome com o nome "Joao"
    trataNome("Joao");
    
    // Chama a função trataNome com uma string vazia, o que causará uma exceção
    trataNome("");
} catch (Exception $e) {
    // Captura a exceção e exibe a mensagem de erro
    echo $e->getMessage();
} finally {
    // Este bloco é executado independentemente de uma exceção ter sido lançada ou não
    echo "Executou o Try!";
}

?>
