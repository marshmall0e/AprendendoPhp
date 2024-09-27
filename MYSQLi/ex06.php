<?php 

$conn = new PDO("mysql:dbname=dbphp8;host=localhost","root", "",);

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario  = ?");

$id = 20;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Deletado com Sucesso!";

?>