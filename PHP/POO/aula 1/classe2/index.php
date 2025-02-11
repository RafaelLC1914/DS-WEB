<?php
class Raquete {
    //atributos:
    
    
    public $tamanho;

    public $cor;
    
    public $borracha;

    public $madeira;

    public $marca;

    //Metodo:
   
    public function manusear(){
        return "o tamanho da raquete que vai ser manuseada é: ". $this->tamanho;

    }
    public function sacar(){
        return "o tamanho da raquete que vai sacar é: ". $this->tamanho;
    }
    public function segurar (){
        return "o tamanho da raquete que voce vai segurar é: ". $this->tamanho;
    }
    
}


$raquetePinPong = new raquete ;

$raquetePinPong->cor = "preto";
$raquetePinPong->tamanho = 30;
$raquetePinPong->borracha = "preta";
$raquetePinPong->madeira = "madeira";
$raquetePinPong->marca = "vollo";

echo $raquetePinPong -> manusear()