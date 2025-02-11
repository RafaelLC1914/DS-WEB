<?php
class ContaBancaria {
    //atributos:
    
    
    public $ArmazenarONúmeroDaConta;

    Public $NomeDoTitular;
    
    Public $Saldo;

    //Metodo:
    //public function nome(){
        //return"o nome do titular é: ". $this->$NomeDoTitular . "<br>";

   // }

     
    public function depositos($deposito){
        $this->saldo += $deposito;
        return"este é o novo saldo com o deposito: ". $this->saldo . "<br>";

    }
    public function exibirSaldo(){
        return "O saldo é de: " . $this->saldo . "<br>"; 

    }
    public function saques($saque){
        $this->saldo -= $saque;
        return"este é o novo saldo com o saque: ". $this->saldo . "<br><br><br><br><br> ";


    }

}


$conta1 = new ContaBancaria;

$conta1->ArmazenarONúmeroDaConta = 4568;
$conta1->NomeDoTitular = "Rafael";
$conta1->saldo = 10000;
//echo $conta1-> nome();
echo $conta1-> exibirSaldo();
echo $conta1-> depositos(40);
echo $conta1-> saques(20);



$conta2 = new ContaBancaria;
$conta2->ArmazenarONúmeroDaConta = 4569;
$conta2->NomeDoTitular = "Júlio";
$conta2->saldo = 20.48;
//echo $conta2-> nome();
echo $conta2-> exibirSaldo();
echo $conta2-> depositos(20);
echo $conta2-> saques(20);


$conta3 = new ContaBancaria;
$conta3->ArmazenarONúmeroDaConta = 4567;
$conta3->NomeDoTitular = "Gabriel";
$conta3->saldo = 4000;
//echo $conta3-> nome();
echo $conta3-> exibirSaldo();
echo $conta3-> depositos(20);
echo $conta3-> saques(20);

?>
