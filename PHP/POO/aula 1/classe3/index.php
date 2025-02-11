<?php
class Mochila {
    //atributos:
   
    
    public $cor;

    Public $tamanho;
    
    Public $material;

    Public $preço;

    Public $marca;

    //Metodo:
  
    public function carregar(){
        return "o tamanho da bolsa que voce vai carregar é: ". $this->tamanho

    }
    public function armazenar(){
        return "o tamanho da bolsa que voce vai armazenar é: ". $this->tamanho

    }
    public function levarCoisas(){
        return "o tamanho da bolsa que voce vai levar coisas é: ". $this->tamanho

    }
}


$nike = new Mochila;

$nike->cor = "preto";
$nike->tamanho = 60;
$nike->material = "tecido";
$nike->preço = "100";
$nike->marca = "nike";
echo $nike->carregar()