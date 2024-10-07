<?php 

function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "code"=> $code, 
        "message"=> $message,
        "file"=> $file,
        "line"=> $line // Corrigido para minúscula

    ));
}
// Definindo o manipulador de erros
set_error_handler("error_handler");

// Verificando se o divisor é zero antes de dividir
$divisor = 0;
if ($divisor !== 0) {
    echo 100 / $divisor;
} else {
    // Apenas exibir uma mensagem sem gerar um aviso
    echo json_encode(array("message" => "Divisão por zero detectada. Operação não realizada."));
}
?>
?>