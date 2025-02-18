<?php
class veiculo{
    public $marca;
    public $modelo;
    private $velocidade;

    public function setvelo($velo){
        $this->velocidade = $velo;
    }
    public function getvelo(){
        return $this->velocidade;

    }
}
class Carro extends veiculo{
    public function acelerar(){
        return 'acelerador em pedais, pisar para acelerar';
    }
}
class moto extends veiculo{
    public function acelerar(){
        return 'acelerador em manopla, gira-la para acelerar';
    }
}
$gtr = new Carro ();
    echo get_class($gtr).'<br>';
    $gtr -> marca = 'marca: Nissan';
    echo $gtr -> marca;
    echo '<br>';
    $gtr -> modelo = 'Modelo: Nissan GTR-35';
    echo $gtr -> modelo;
    $gtr -> setvelo(300);
    echo"<br>";
    echo $gtr -> getvelo() . " km: velocidade".'<br><br>';

$honda = new moto ();
    echo get_class($honda).'<br>';
    $honda -> marca = 'marca: honda';
    echo $honda -> marca;
    echo '<br>';
    $honda -> modelo = 'Modelo: NX200';
    echo $honda -> modelo;
    $honda -> setvelo(300);
    echo"<br>";
    echo $honda -> getvelo() . " km: velocidade";


    
