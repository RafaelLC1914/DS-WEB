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
    <title>Business System - Produto</title>
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
            <?php
                if($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET['id'])){
                    header("Location: produto.php");
                }
                include '../conexao.php';
                $id = $_GET['id'];
                $stmt = $db->prepare("SELECT * FROM produto WHERE id = :id");
                $stmt->bindParam(':id',$id);
                $stmt->execute();
                $dados = $stmt->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
                $idProduto = $dados['id'];
                $nomeProduto = $dados['nome'];
                $codigoProduto = $dados['codigo'];
                $estoqueProduto = $dados['estoque'];
                $precoProduto = $dados['preco'];
            ?>
        <div class="formulario">
            <form action="produtoUpdate.php?id=<?=$idProduto;?>" method="POST" name="formulario" onsubmit="return validarDadosProduto()">

                <label for="codigo">Código do Produto:</label>
                <input type="number" id="codigo" name="codigo" VALUE="<?=$codigoProduto?>">
                <p class="erro-input" id="erro-codigo"></p>

                <label for="nome">Nome do Produto: </label>
                <input type="text" id="nome" name="nome" VALUE="<?=$nomeProduto?>" >
                <p class="erro-input" id="erro-nome"></p>
              
                <label for="estoque">Estoque dos Produtos:</label>
                <input type="number" id="estoque" name="estoque" VALUE="<?=$estoqueProduto?>">
                <p class="erro-input" id="erro-estoque"></p>

                <label for="preco">Preço produto:</label>
                <input type="float" id="preco" name="preco" VALUE="<?=$precoProduto?>">
                <p class="erro-input" id="erro-preco"></p>

                <input type="submit">
            </form>
        </div>
  
    </div>
</body>
<script src="../assets/js/scriptProduto.js"></script>
<script src="https://kit.fontawesome.com/56c1ac89b8.js" crossorigin="anonymous"></script>
</html>