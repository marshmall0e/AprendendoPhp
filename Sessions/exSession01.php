<?php 
// session é considerado um array global 
require_once("config.php"); #Não é a mesma coisa que utilizar o session_start();, pois no config.php é possivel colocar varias informações, por exemplo colocar constantes de banco de dados com as senhas, configuração de região e etc 
$_SESSION["nome"] = "Victoria";
?>