<center><h1>Produtos cadastrados</h1></center>

<table class="produtos">
    <tr>
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
        <th>Acessar:</th>
        <th>Excluir:</th>
    </tr>
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
                echo "<td><a  href='produto/$idProduto'><button class='botao1'>Acessar Produto</button></a></td>";
                echo "<td><a href='produto/$idProduto/excluir'><button class='botao1'>Excluir Produto</button></a></td>";
            echo "</tr>";
        }
    ?>
</table>
<br>
<center><a href="produto/cadastro"><button class='botao1'>Cadastrar produto</button></a></center>