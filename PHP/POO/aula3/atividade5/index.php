<?php
class Documento {
    private $numero;

    // Método para definir o número do documento
    public function setNumero($Numero) {
        $this->numero = $Numero;
    }

    // Método para obter o número do documento
    public function getNumero() {
        return $this->numero;
    }
}

class CPF extends Documento {
    // Método para validar CPF
    public function validar() {
        $cpf = preg_replace('/[^0-9]/', '', $this->getNumero()); // Remove caracteres não numéricos

        // Verifica se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Elimina CPFs inválidos conhecidos
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        // Calcula e verifica os dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$t] != $d) {
                return false;
            }
        }

        return true;
    }
}

// Criando um objeto da classe CPF
$meuCPF = new CPF();
$meuCPF->setNumero("123.456.789-09"); // Troque por um CPF válido para testar

// Exibindo o resultado na página
$validacao = $meuCPF->validar() ? "Sim" : "Não";
echo "Número do CPF: " . $meuCPF->getNumero() . "<br>";
echo "CPF é válido? " . $validacao . "<br>";

// Exibindo o resultado no console do navegador
echo "<script>console.log(" . json_encode($meuCPF->validar()) . ");</script>";

?>