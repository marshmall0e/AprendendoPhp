<?php 
//classe abstrata

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade) {
    echo "O veiculo acelerou até ". $velocidade . " km/h";
    }

    public function freiar($velocidade) {
        echo "O veiculo freiou até". $velocidade . "km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veiculo engatou a marcha ". $marcha;
    }
}

class DelRey extends Automovel {
    public function empurrar(){

    }
}

$carro = new DelRey();

$carro->acelerar(200);
?>

<!-- Uma classe abstrata no PHP é uma classe que não pode ser instanciada diretamente. Ela é usada como um modelo para outras classes, permitindo que você defina métodos que devem ser implementados nas subclasses. Isso é útil para garantir que subclasses sigam uma estrutura comum.

Aqui estão os principais pontos sobre classes abstratas:

Definição: Para declarar uma classe abstrata, você usa a palavra-chave abstract antes da palavra-chave class.

Métodos Abstratos: Dentro de uma classe abstrata, você pode definir métodos abstratos (também usando a palavra-chave abstract). Esses métodos não têm corpo e devem ser implementados nas subclasses.

Métodos Concretos: Uma classe abstrata também pode ter métodos concretos (com implementação) que podem ser usados pelas subclasses.

Instanciação: Você não pode criar uma instância de uma classe abstrata diretamente. Deve criar uma subclasse que estenda a classe abstrata e implemente os métodos abstratos.

Resumo
Classes Abstratas: Fornecem um modelo comum.
Métodos Abstratos: Devem ser implementados nas subclasses.
Métodos Concretos: Podem ser utilizados diretamente pelas subclasses.
Não podem ser instanciadas: Você precisa de subclasses para isso. -->