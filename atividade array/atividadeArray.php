<?php
    $frutas= array ('morango','melão','banana','maça','tomate');
    array_push($frutas,'lichia');
    sort($frutas);
    foreach ($frutas as $x){
    echo "$x <br><br>";
    }
    $produtos = [
        "preço" => 2.50,
        "estoque"=> 15,
    ];
    foreach ( $produtos as $chave => $valor) {
        echo "$chave: $valor<br><br>";
    }
    $produtos ["novo preço"] = 4.50;

    foreach ( $produtos as $chave => $valor) {
        echo "$chave: $valor<br>";
    }
    $unidades = 5;
    $preço_total = $produtos["preço"] * $unidades;
    echo "Valor total da venda de $unidades unidades: R$ $preço_total<br>";

    $nomes_produtos = array ("Teclado", "Mouse", "Monitor");
    $preços_produtos = array (150.00, 80.00, 1200.00);

    $produtos = array_combine($nomes_produtos,$preços_produtos);
    print_r($produtos);

    $cores = array ("vermelho", "azul", "verde", "amarelo", "preto");

    if (in_array("verde", $cores)) {
        echo "A cor 'verde' está presente no array.<br>";
    } else {
        echo "A cor 'verde' não está presente no array.<br>";
    }
    $numeros = [10, 20, 30, 40, 50];

    $soma = array_sum($numeros);
    $media = $soma / count($numeros);

    echo "Soma: $soma<br>";
    echo "Média: $media<br>";



?>