<?php

class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $resultado = Documento::validarCPF($numero);

        if ($resultado === false) { 
            throw new Exception("CPF informado não é valido");
        }

        $this->numero = $numero;
    }
    
    public static function validarCPF($cpf): bool {
        if (empty($cpf)) {
            return false;
        }
    
        // Remove caracteres não numéricos
        $cpf = preg_replace('/\D/', '', $cpf);
    
        // Preenche com zeros à esquerda se necessário
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        // Verifica o comprimento do CPF
        if (strlen($cpf) != 11) {
            return false;
        }
    
        // Validação de CPFs com todos os dígitos iguais
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }
    
        // Cálculo dos dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
    
        return true;
    }
    
}
/*
$cpf = new Documento();
$cpf->setNumero("822.212.470-60");
var_dump($cpf->getNumero());
*/

var_dump(Documento::validarCPF("822.212.470-60"))
?>