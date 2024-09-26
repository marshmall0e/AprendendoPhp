<?php 

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade) {
        echo "O veiculo acelerou até " . $velocidade . " km/h<br>";
    }

    public function freiar($velocidade) {
        echo "O veiculo freiou até " . $velocidade . " km/h<br>";
    }

    public function trocarMarcha($marcha) {
        echo "O veiculo engatou a marcha " . $marcha . "<br>";
    }
}

?>


<!-- Automovel.php:

Define a interface Veiculo, que especifica três métodos: acelerar(), freiar(), e trocarMarcha().
Define a classe abstrata Automovel, que implementa a interface Veiculo. Isso significa que a classe Automovel deve fornecer implementações para os métodos da interface.
Os métodos implementados na classe Automovel:
acelerar($velocidade): Exibe uma mensagem indicando a velocidade do veículo ao acelerar.
freiar($velocidade): Exibe uma mensagem indicando a velocidade ao frear.
trocarMarcha($marcha): Exibe uma mensagem indicando a marcha engatada -->