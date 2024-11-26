<?php
    $produtos= array(
        array('nome' => 'pilha', 'preço' => 20.00, 'estoque' => 15),
        array('nome' => 'garrafinha', 'preço' => 40.00, 'estoque' => 10),
        
    );
    foreach($produtos as $produto){
        echo $produto['nome']."<br>";
        echo $produto['preço']."<br>";
        echo $produto['estoque']."<br>";
        $valorTotal1 = $produto['preço'] * $produto['estoque'].'<br>';
        echo $valorTotal1 ;
    }

    $alunos = array(
        array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
        array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
        array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8),
    );
    foreach($alunos as $notas){
        echo $notas['nome'] .$notas['matematica'].$notas['portugues'];
        
        
        $valorTotal2 = ($notas['matematica'] + $notas['portugues'])/2;
        echo $valorTotal2 ;
        

    }
    


?>
