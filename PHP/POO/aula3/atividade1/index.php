<?php
class pessoas {

public $nome; 
protected $idade;

public function setIdade($valor){
    $this->idade = $valor;
    }
public function getIdade(){
    return $this->idade; 

}
}
class funcionario extends pessoas{
protected $salario;

public function setSalario($valor){
    $this->salario = $valor;
    }
public function getSalario(){
    return $this->salario; 
}

}

class gerente extends funcionario{

public function CalculoFinal(){

    $bonus = $this->salario * (20/100);
    return "o bonus do gerente é: R$". $bonus.'<br>' ; 

}

}
class Desenvolvedor extends funcionario{
    public function CalculoFinal(){

        $bonus = $this->salario * (10/100);
        return "o bonus do desenvolvedor é: R$". $bonus; 
    
    }
}
$contaGerente = new gerente;

echo get_class($contaGerente).'<br>';
$contaGerente -> nome = 'nome do gerente: rafael';
echo $contaGerente -> nome;
$contaGerente -> setIdade(21);
echo"<br>";
echo $contaGerente -> getIdade() . " Anos";
echo"<br>";
$contaGerente -> setSalario(3000);
echo $contaGerente -> CalculoFinal();
echo"<br>";

$contaDesenvolvimento = new Desenvolvedor;
echo get_class($contaDesenvolvimento).'<br>';
$contaDesenvolvimento -> nome = 'nome do desenvolvedor: gustavo';
echo $contaDesenvolvimento -> nome;
$contaDesenvolvimento -> setIdade(20);
echo"<br>";
echo $contaDesenvolvimento -> getIdade() . " Anos";
echo"<br>";
$contaDesenvolvimento -> setSalario(4000);
echo $contaDesenvolvimento -> CalculoFinal();
