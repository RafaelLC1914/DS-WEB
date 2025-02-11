<?php
class Bola {
    //atributos:
    
    public $cor;

    Public $tamanho;
    
    Public $material;

    Public $preço;

    Public $marca;

    //Metodo:
   
    public function pegar(){
        return "o tamanho da bola que voce vai pegar é: ". $this->tamanho;


    }
    public function jogar(){
        return "o tamanho da bola que voce vai jogar é: ". $this->tamanho;


    }
    public function arremesar(){
        return "o tamanho da bola que voce vai arremesar é: ". $this->tamanho;


    }

}


$penalty = new Bola;

$penalty->cor = "preto";
$penalty->tamanho = 30;
$penalty->material = "couro";
$penalty->preço = 50;
$penalty->marca = "penalty";
echo $penalty->pegar()
?>