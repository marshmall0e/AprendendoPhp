<?php 
//Atributos e Métodos
class Carro{
    private $modelo;
    private $motor;
    private $ano;

public function getModelo(){
    return $this->modelo;
}
public function setModelo($modelo){
    $this->modelo = $modelo;
}

public function getMotor():float{
    return $this->motor;
}
public function setMotor($motor){
    $this->motor = $motor;
}

public function getAno():int{
    return $this->ano;
}
public function setAno($ano){
    $this->ano = $ano;
}

public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());


?>

<!-- Esse código define uma classe Carro com atributos privados (modelo, motor, ano) e métodos públicos para obter e definir esses atributos. Os métodos get retornam os valores dos atributos, enquanto os métodos set permitem alterá-los. O método exibir retorna um array com as informações do carro. No final, um objeto Carro é criado, e seus atributos são definidos e exibidos usando var_dump(). -->