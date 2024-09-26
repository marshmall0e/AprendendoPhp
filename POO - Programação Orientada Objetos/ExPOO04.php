<?php
//metodo construtor 

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() {
        //var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua ", "00", " Cidade " );

/*var_dump($meuEndereco);
unset($meuEndereco);*/
echo $meuEndereco;
?>

<!--Esse código define uma classe Endereco que representa um endereço com três atributos: $logradouro, $numero e $cidade. Vamos detalhar cada parte:

Construtor __construct:

É um método especial chamado automaticamente ao criar um novo objeto da classe. Aqui, ele recebe três parâmetros ($a, $b, $c) e os atribui aos atributos correspondentes da classe.

Destrutor __destruct:

É um método que é chamado quando o objeto é destruído. Embora o código tenha um var_dump comentado, você poderia usá-lo para executar ações de limpeza ou exibir mensagens ao destruir o objeto.

Método __toString:

Permite que o objeto seja convertido em uma string quando usado em um contexto que espera uma string (como echo). Aqui, retorna uma representação formatada do endereço.

Instância da Classe:

Um objeto Endereco é criado com $meuEndereco, passando os valores "Rua ", "00" e "cidade".

Saída:

Ao usar echo $meuEndereco;, o método __toString é chamado, resultando na impressão do endereço no formato "Rua da Esperança, 75 - Guarabira". -->