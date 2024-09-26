<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro ();

$cad->setNome("Victoria Kamilly");
$cad->setEmail("victoria123#gmail.com");
$cad->setSenha("123456789");

$cad->registrarVenda();
?>