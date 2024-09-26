<?php 

class Pessoa{
    public $nome; //Atributo
    public function falar(){ //Método
        return "O meu nome é ".$this->nome;
    }
}

$victoria = new Pessoa();
$victoria->nome = "Victoria Kamilly";
echo $victoria->falar();

?>

<!-- Esse código define uma classe Pessoa com um atributo público $nome e um método falar(), que retorna uma string contendo o nome da pessoa. Um objeto Pessoa chamado $victoria é criado, e seu atributo $nome é definido como "Victoria Kamilly". Ao chamar echo $victoria->falar(), o método retorna e exibe a frase "O meu nome é Victoria Kamilly". -->