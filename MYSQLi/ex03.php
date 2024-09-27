<?php 
//PDO utilizando os parametros 

$conn = new PDO("mysql:dbname=dbphp8;host=localhost","root", "",);

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Mariany";
$password = "marigatinha123";

$stmt->bindParam(":LOGIN", $login, PDO::PARAM_STR);
$stmt->bindParam(":PASSWORD", $password, PDO::PARAM_STR);

$stmt->execute();

echo "Inserido com Sucesso!";
?>