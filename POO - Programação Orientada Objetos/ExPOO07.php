<?php 
//herança

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }

}

class CPF extends Documento {
    public function validar(): bool{

        $numeroCPF = $this->getNumero();
        function validarCPF($cpf) {
            // Remove caracteres não numéricos
            $cpf = preg_replace('/\D/', '', $cpf);
        
            // Verifica se o CPF possui 11 dígitos
            if (strlen($cpf) != 11) {
                return false;
            }
        
            // Verifica se o CPF é uma sequência de números iguais
            if (preg_match('/^(\d)\1{10}$/', $cpf)) {
                return false;
            }
        
            // Cálculo do primeiro dígito verificador
            $soma = 0;
            for ($i = 0; $i < 9; $i++) {
                $soma += intval($cpf[$i]) * (10 - $i);
            }
            $resto = $soma % 11;
            $digito1 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Cálculo do segundo dígito verificador
            $soma = 0;
            for ($i = 0; $i < 10; $i++) {
                $soma += intval($cpf[$i]) * (11 - $i);
            }
            $resto = $soma % 11;
            $digito2 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Verifica se os dígitos calculados correspondem aos dígitos do CPF
            return ($cpf[9] == $digito1 && $cpf[10] == $digito2);
        }
        
        // Exemplo de uso
        $cpf = "123.456.789-09"; // Substitua pelo CPF que deseja validar
        if (validarCPF($cpf)) {
            echo "CPF válido.";
        } else {
            echo "CPF inválido.";
        }
    

        return true;
    }
}

class CNPJ extends Documento {
    public function validarCNPJ(): bool{
        $numeroCNPJ = $this->getNumero();

        //Validação
        function validarCNPJ($cnpj) {
            // Remove caracteres não numéricos
            $cnpj = preg_replace('/\D/', '', $cnpj);
        
            // Verifica se o CNPJ possui 14 dígitos
            if (strlen($cnpj) != 14) {
                return false;
            }
        
            // Verifica se o CNPJ é uma sequência de números iguais
            if (preg_match('/^(\d)\1{13}$/', $cnpj)) {
                return false;
            }
        
            // Cálculo dos dígitos verificadores
            $soma = 0;
            $peso = 5;
        
            // Primeiro dígito verificador
            for ($i = 0; $i < 12; $i++) {
                $soma += intval($cnpj[$i]) * $peso;
                $peso = ($peso == 2) ? 9 : $peso - 1;
            }
            
            $resto = $soma % 11;
            $digito1 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Segundo dígito verificador
            $soma = 0;
            $peso = 6;
        
            for ($i = 0; $i < 13; $i++) {
                $soma += intval($cnpj[$i]) * $peso;
                $peso = ($peso == 2) ? 9 : $peso - 1;
            }
            
            $resto = $soma % 11;
            $digito2 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Verifica se os dígitos calculados correspondem aos dígitos do CNPJ
            return ($cnpj[12] == $digito1 && $cnpj[13] == $digito2);
        }
            // Exemplo de uso
            $cnpj = "12.345.678/0001-95"; // Substitua pelo CNPJ que deseja validar
            if (validarCNPJ($cnpj)) {
                echo "CNPJ válido.";
            } else {
                echo "CNPJ inválido.";
            }

        return true;
    }
}


$doc = new CPF();
$doc->setNumero("099.113.850-35");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
echo "<br>";

$doc = new CNPJ();
$doc->setNumero("66.219.833/0001-56");
var_dump($doc->validarCNPJ());
echo "<br>";
echo $doc->getNumero();
?>

<!-- A herança em PHP é um conceito fundamental da programação orientada a objetos que permite que uma classe (chamada de classe filha ou subclasse) herde propriedades e métodos de outra classe (chamada de classe pai ou superclasse). Isso promove a reutilização de código e a organização do sistema. -->