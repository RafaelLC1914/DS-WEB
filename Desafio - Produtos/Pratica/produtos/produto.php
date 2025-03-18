<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Cliente</title>
    <link rel="shortcut icon" href="../assets/img/icon.svg" type="imagex/png">
    <link rel="stylesheet" href="../assets/style/style.css">
<body>
    <div class="menu">
        <ul>
            <li><a href="../index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="../clientes/cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
            <li><a href="produto.php" class="meumenu meumenu-active" title="Produtos">Produtos </a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas </a></li>
        </ul>
    </div>

    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertionProduto.php" method="POST" name="formulario" onsubmit="return validarDadosProduto()" >
                <label for="codigo">Codigo do produto: </label>
                <input type="number" id="codigo" name="codigo" value = "<?=isset ($_SESSION['valorCodigo']) ? $_SESSION['valorCodigo'] : "";?>" > 
                <p class="erro-input" id="erro-codigo"><?=isset ($_SESSION['erroCodigo']) ? $_SESSION['erroCodigo'] : "";?></p>
              
                <label for="nome">nome do produto: </label>
                <input type="text" id="nome" name="nome" value = "<?=isset ($_SESSION['valorNome']) ? $_SESSION['valorNome'] : "";?>">
                <p class="erro-input" id="erro-nome"><?=isset ($_SESSION['erroNome']) ? $_SESSION['erroNome'] : "";?></p>
              
                <label for="estoque">estoque:</label>
                <input type="number" id="estoque" name="estoque" value = "<?=isset ($_SESSION['valorEstoque']) ? $_SESSION['valorEstoque'] : "";?>">
                <p class="erro-input" id="erro-estoque"><?=isset ($_SESSION['erroEstoque']) ? $_SESSION['erroEstoque'] : "";?></p>

                <label for="preco">preço:</label>
                <input type="float" id="preco" name="preco" value = "<?=isset ($_SESSION['valorPreco']) ? $_SESSION['valorPreco'] : "";?>">
                <p class="erro-input" id="erro-preco"><?=isset ($_SESSION['erroPreco']) ? $_SESSION['erroPreco'] : "";?></p>
       
                <input type="submit">
            </form>
        </div>
    <br>
    <table id="produtos">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Estoque</th>
            <th>Preço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    <?php
        include '..\conexao.php';

       
        $dados = $db->query("SELECT * FROM Produto");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        foreach($todos as $linha){
            $idProduto = $linha['id'];
            $CodigoProduto = $linha['codigo'];
            $nomeProduto= $linha['nome'];
            $estoqueProduto = $linha['estoque'];
            $PrecoProduto = $linha['preco'];



            echo "
                <tr>
                    <td>$CodigoProduto</td>
                    <td>$nomeProduto</td>
                    <td>$estoqueProduto</td>
                    <td>$PrecoProduto</td>
                    <td><a class='link-alteracao' a href='produtoAlteracao.php?id=$idProduto'><i class='fa-solid fa-pencil'></i></a></td>
                    <td><a class='link-delete' href='produtoDelete.php?id=$idProduto'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
            ";
        }

    ?>
    </table>
    </div>
</body>
<script src="../assets/js/scriptProduto.js"></script>
<script src="https://kit.fontawesome.com/56c1ac89b8.js" crossorigin="anonymous"></script>
</html>