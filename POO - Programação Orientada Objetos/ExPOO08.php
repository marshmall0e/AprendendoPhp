<?php 
//Interface
//Definição de Interface
#Você define uma interface usando a palavra-chave interface. Dentro da interface, você declara métodos, mas não os implementa.
interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}
//Implementação da Interface:
#Uma classe que implementa uma interface deve definir todos os métodos declarados na interface. Você usa a palavra-chave implements para isso.
class Civic implements Veiculo {
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

$carro = new Civic();
$carro->trocarMarcha(1);


?>



<!-- Em PHP, uma interface é um contrato que define um conjunto de métodos que uma classe deve implementar, sem fornecer a implementação desses métodos. Interfaces são usadas para garantir que diferentes classes compartilhem uma certa funcionalidade, promovendo a consistência e a organização no código. 
 
Múltiplas Interfaces:

Uma classe pode implementar várias interfaces, permitindo que você crie hierarquias mais flexíveis.

Métodos Estáticos e Constantes:

Interfaces não podem ter métodos com implementação, mas você pode declarar métodos estáticos e constantes.

Resumo:

Interfaces em PHP permitem definir um conjunto de métodos que devem ser implementados por qualquer classe que a utilize, promovendo consistência, flexibilidade e polimorfismo no código. Se precisar de mais detalhes ou exemplos, estou à disposição! -->