<?php
class Mouse {
    //atributos:
   
    
    public $cor;

    protected $tamanho;
    
    private $material;

    private $preço;

    private $marca;

    //Metodo:
    
    public function segurar(){
        return "o tamanho do mouse que voce vai segurar é: ". $this->tamanho;

    }
    public function clicar(){
        return "o tamanho  que voce vai pegar é: ". $this->tamanho;

    }
    public function mover(){

    }

}


$redDragon = new mouse ;

$redDragon->cor = "preto";
$redDragon->tamanho = 15;
$redDragon->material = "plastico";
$redDragon->preço = "50";
$redDragon->marca = "red Dragon";
echo $redDragon->segurar()