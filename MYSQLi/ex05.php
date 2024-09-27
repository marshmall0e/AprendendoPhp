<?php 
// deletando com mysql
$conn = new PDO("mysql:dbname=dbphp8;host=localhost","root", "",);

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario  = '19'");

//DELETE FROM tb_usuarios WHERE idusuario = :ID
//$id = 19

$stmt->execute();

echo "Deletado com Sucesso!";

?>