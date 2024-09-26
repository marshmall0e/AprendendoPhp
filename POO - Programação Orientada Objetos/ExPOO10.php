<?php 
//polimorfismo 

abstract class Animal {
    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Andar";
    }
}

class Cachorro extends Animal {
    public function falar() { 
        return "Late";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "Canta";
    }

    public function mover() {
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() ."<br>";

echo "------------------------------<br>";

$garfield = new Gato();

echo $garfield->falar() . "<br>";
echo $garfield->mover() ."<br>";


echo "------------------------------<br>";

$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover() ."<br>";

?>

<!-- O polimorfismo é um conceito fundamental da programação orientada a objetos (POO) que permite que objetos de diferentes classes possam ser tratados como objetos da mesma classe base. No PHP, isso é comumente alcançado por meio de herança e interfaces. 
 
Tipos de Polimorfismo
Polimorfismo de Subtipo: Ocorre quando subclasses implementam métodos de uma classe pai. Você pode usar uma referência da classe pai para referenciar objetos das subclasses.

Polimorfismo de Interface: Quando diferentes classes implementam a mesma interface, permitindo que objetos de diferentes classes sejam tratados de maneira uniforme.

Resumo
Polimorfismo permite que objetos de diferentes classes sejam tratados de forma semelhante.
Herança: Subclasses podem sobrescrever métodos da classe pai.
Interfaces: Diferentes classes podem implementar a mesma interface, permitindo uma chamada uniforme a métodos. -->