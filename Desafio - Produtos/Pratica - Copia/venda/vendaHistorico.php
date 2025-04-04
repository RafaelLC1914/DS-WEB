
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
</body>



<?php
    include "../conexao.php";


    //Criando a tabela com os titulos
    echo "<table id='vendas'>";
    echo "
        <tr>
            <th>Id Venda</th>
            <th>Data Compra</th>
            <th>Nome Cliente</th>
            <th>Produtos</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Preço Final</th>
        </tr>

    ";

    echo "<div id='VENDASTITULO'>";
    echo "<h1>Vendas Da Diva <a href='../venda.php'><i class='fa-solid fa-rotate-left'></i></a></h1>";
    echo "</div>";
    echo "<hr class='hr'>";
    
    //Puxando os dados da tabela venda
    $dados = $db->query("SELECT * FROM vendas");
    $vendas = $dados->fetchAll(PDO::FETCH_ASSOC);

    //concatenando Tabela clientes com tabela venda - Assim teremos os dados das duas na nossa mão
    foreach($vendas as $venda){
        extract($venda);
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->bindParam(":id", $idCliente);
        $stmt->execute();
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        
        //Puxando os dados da tebela produtosvendidos
        $dados2 = $db->prepare("SELECT * FROM produtosvendidos WHERE idVenda = :idVenda");
        $dados2->bindParam(":idVenda", $id);
        $dados2->execute();
        $prodV = $dados2->fetchAll(PDO::FETCH_ASSOC);        
        
        //criando variavéis a ser printadas na tebela, uma vez que: pode ser que haja mais de um item por coluna
        $listaProdutos = "";
        $listaQuantidades = "";
        $precoFinal = 0;
        $listaPreco = "";        
        
        /* Concatenando a tabala produto com a tabela produtos vendidos, assim teremos todas
         as tabelas em nossa mão (vendas, produtosvendidos,produto e clientes) */
         foreach($prodV as $prods){
            extract($prods);
            $stmt = $db->prepare("SELECT * FROM produto WHERE id = :id");
            $stmt->bindParam(":id", $idProduto);
            $stmt->execute();
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);
        
            $subtotal = $quantidade * $produto['preco'];
            $precoFinal += $subtotal;
        
            $listaProdutos .= $produto['nome']. "<br>";
            $listaQuantidades .= $quantidade . "<br>";
            $listaPreco .= "R$" . $produto['preco'] . "<br>";
            
        }
        
        echo "<tr>";
        echo "<td>" . $venda['id'] . "</td>";
        echo "<td>" . $venda['dataVenda'] . "</td>";
        echo "<td>" . $cliente['nome'] . "</td>";
        echo "<td>" . $listaProdutos . "</td>";
        echo "<td>" . $listaPreco . "</td>"; 
        echo "<td>" . $listaQuantidades . "</td>";
        echo "<td>R$ " . number_format($precoFinal, 2, ',', '.') . "</td>";
        echo "</tr>";

        
    }
?>
<script src="https://kit.fontawesome.com/8403ba6cce.js" crossorigin="anonymous"></script>  
</html>