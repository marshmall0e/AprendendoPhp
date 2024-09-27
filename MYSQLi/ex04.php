<?php 
//update de dados no mysql

$conn = new PDO("mysql:dbname=dbphp8;host=localhost","root", "",);

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "VICTORIA";
$password = "qwerty";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Alterado com Sucesso!";








?>