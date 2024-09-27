<?php 

$conn = new mysqli("localhost", "root","","dbphp8");

if ($conn->connect_error) {
    echo "Error:  " . $conn->connect_error; 
}

$result = $conn->query(   "SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);

}
echo json_encode($data);

?>

<!-- Esse código PHP faz o seguinte:

Conexão ao Banco de Dados: Ele cria uma conexão com um banco de dados MySQL usando mysqli, especificando o servidor (localhost), usuário (root), senha (vazia) e nome do banco de dados (dbphp8).

Verificação de Erros: Se a conexão falhar, ele exibe uma mensagem de erro.

Consulta ao Banco: Executa uma consulta SQL para selecionar todos os registros da tabela tb_usuarios, ordenando pelo campo deslogin.

Armazenamento dos Resultados: Cria um array vazio e, em seguida, usa um loop para adicionar cada linha do resultado da consulta a esse array.

Saída em JSON: Por fim, converte o array de dados em formato JSON e o exibe.

Basicamente, o código busca e retorna todos os usuários do banco de dados em formato JSON. -->