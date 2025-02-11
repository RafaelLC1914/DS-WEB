<?php
class Lapis {
    //atributos:
    
    public $cor;

    public $tamanho;
    
    public $grafite;

    public $madeira;

    public $marca;

    //Metodo:
    public function escrever(){
        return "a cor do gravite é: ". $this -> grafite;

    }
    public function pintar(){
        

    }
    public function desenhar(){
       

    }

}


$lapisDeCor = new lapis;

$lapisDeCor->cor = "petro";
$lapisDeCor->tamanho = 15;
$lapisDeCor->grafite = "preto";
$lapisDeCor->madeira = "madeira";
$lapisDeCor->marca = "Faber Castel";

echo $lapisDeCor->escrever();
