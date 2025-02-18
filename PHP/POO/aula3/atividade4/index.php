<?php

abstract class Produto {
    public $nome;
    public $preco;
    protected $estoque; 

    abstract public function calcularDesconto();
    public function setEstoque($Estoque) {
        $this->estoque = $Estoque; 
    }

    public function getEstoque() {
        return $this->estoque;
    }
}
class Eletronico extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.1;
        $precoFinal = $this->preco - $desconto;

        
        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.1;
        }

        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.2;
        $precoFinal = $this->preco - $desconto;

        
        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.1;
        }

        return $precoFinal;
    }
}

$computador = new Eletronico();
echo get_class($computador) . ":<br>";


$computador->nome = "computador";
$computador->preco = 2000;
$computador->setEstoque(4); 

echo "Nome: " . $computador->nome . "<br>";
echo "Preço original: R$" . $computador->preco . "<br>";
echo "O estoque do produto é: " . $computador->getEstoque() . " computador.<br>";
echo "Preço com desconto: R$" . $computador->calcularDesconto() . "<br><br>";

$camiseta = new Roupa();
echo get_class($camiseta) . ":<br>";

$camiseta->nome = "camiseta";
$camiseta->preco = 220;
$camiseta->setEstoque(7); 

echo "Nome: " . $camiseta->nome . "<br>";
echo "Preço original: R$" . $camiseta->preco . "<br>";
echo "O estoque do produto é: " . $camiseta->getEstoque() . " computador.<br>";
echo "Preço com desconto: R$" . $camiseta->calcularDesconto() . "<br><br>";