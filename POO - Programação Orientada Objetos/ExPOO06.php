<?php 
//encapsulamento
class Pessoa {
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = "123456789";

    public function verDados(){
    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa {
    public function verDados(){

        echo get_class($this) ."<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        //echo $this->senha . "<br>";  #consta como erro devido a estar com status de private, pois a classe programador não tem acesso as informações do PRIVATE da classe Pessoa
        }
}

$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();

?>

<!-- Em PHP, public, protected e private são modificadores de visibilidade que controlam o acesso aos atributos e métodos de uma classe.

public:

Atributos e métodos declarados como public são acessíveis de qualquer lugar, tanto dentro da classe quanto fora dela. Isso é útil para métodos que você deseja que sejam acessíveis amplamente.
protected:

Atributos e métodos protected podem ser acessados apenas dentro da própria classe e em subclasses (classes que estendem a classe original). Isso é útil para encapsular a lógica, permitindo que apenas heranças acessem esses elementos.
private:

Atributos e métodos private são acessíveis apenas dentro da própria classe. Isso significa que nem mesmo subclasses podem acessá-los. É a forma mais restritiva de controle de acesso, ideal para proteger dados internos e implementar a encapsulação. -->