<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">    
    <input type="submit" name="OK">

</form>

<?php 
if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        echo "Nome do Campo: " . $key . "<br>";
        echo "Valor do Campo: ". $value;
        echo "<hr>";
    }
}
?>

<!--Este código HTML cria um formulário com três campos: um campo de texto para o nome, um campo de data para a data de nascimento e um botão de envio. Quando o formulário é enviado, os dados são enviados via método GET. A seção PHP, que verifica se a variável $_GET está definida, utiliza um loop foreach para iterar sobre os dados recebidos. Para cada par de chave e valor, ele exibe o nome do campo ($key) e o valor correspondente ($value), formatando a saída com quebras de linha e separadores. Essa abordagem é útil para visualizar os dados submetidos pelo usuário de maneira clara e organizada.!>