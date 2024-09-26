<?php 
function meuAutoloader($nomeClass) {
    require_once("$nomeClass.php");
}

spl_autoload_register('meuAutoloader');

$carro = new DelRey();
$carro->acelerar(80);

?>

<!-- ExPOO11.php:

Define uma função de autoload chamada meuAutoloader, que tenta incluir arquivos de classe automaticamente com base no nome da classe.
Usa spl_autoload_register() para registrar a função de autoload.
Cria uma instância da classe DelRey e chama o método acelerar(80), que exibirá a mensagem de aceleração para 80 km/h. 

O código implementa um exemplo básico de programação orientada a objetos em PHP. Utiliza o autoload para carregar automaticamente as classes definidas em arquivos separados. A classe DelRey herda comportamentos da classe Automovel, que por sua vez implementa uma interface Veiculo, garantindo que métodos essenciais para um veículo sejam definidos. Isso promove uma estrutura organizada e modular, facilitando a manutenção e a expansão do código.

-->