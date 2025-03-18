<?php
session_start();
include_once('conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Home</title>
    <link rel="shortcut icon" href="./assets/img/icon.svg" type="imagex/png">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
            <li><a href="clientes/cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="produtos/produto.php" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas</a></li>
        </ul>
    </div>

    <div class="container">
        <hr>
        <h1>Dashboard</h1>
        <p>A dashboard encontra-se em desenvolvimento, os dados processados até o momento são:</p>
        <?php
          
                $dados = $db->query("SELECT * FROM clientes");
                echo "Quantidade de clientes cadastrados: " . $dados->rowCount();
                echo "<br>";

                $dados = $db->query("SELECT * FROM produto");
                echo "Quantidade de produtos cadastrados: " . $dados->rowCount();
                echo '<br><br>';
          
        ?>
        <br>
        <a href="logout.php"><button>Logout</button></a>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/56c1ac89b8.js" crossorigin="anonymous"></script>
</html>
