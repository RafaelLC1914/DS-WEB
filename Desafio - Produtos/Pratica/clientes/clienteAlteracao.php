<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Cliente</title>
    <link rel="shortcut icon" href="./assets/img/icon.svg" type="imagex/png">
    <link rel="stylesheet" href="../assets/style/style.css">
<body>
    <div class="menu">
        <ul>
            <li><a href="..\index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href=".\cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes </a></li>
            <li><a href="..\produtos\produto.php" class="meumenu" title="Produtos">Produtos </a></li>
            <li><a href="#" class="meumenu" title="Vendas">Vendas </a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
            <?php
                if($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET['id'])){
                    header("Location: .\cliente.php");
                }
                include '..\conexao.php';
                $id = $_GET['id'];
                $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
                $stmt->bindParam(':id',$id);
                $stmt->execute();
                $dados = $stmt->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
                $idCliente = $dados['id'];
                $nomeCliente = $dados['nome'];
                $emailCliente = $dados['email'];
                $observacaoCliente = $dados['observacao'];
            ?>
        <div class="formulario">
            <form action="clienteUpdate.php?id=<?=$idCliente;?>" method="POST" name="formulario" onsubmit="return validarDadosCliente()">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" VALUE="<?=$nomeCliente?>" >
                <p class="erro-input" id="erro-nome"></p>
              
                <label for="email">E-mail: </label>
                <input type="text" id="email" name="email" VALUE="<?=$emailCliente?>">
                <p class="erro-input" id="erro-email"></p>
              
                <label for="observacao">Observação do Cliente:</label>
                <textarea name="observacao" id="observacao" cols="30" rows="4"><?=$observacaoCliente?></textarea>
                <p class="erro-input" id="erro-observacao"></p>
                <input type="submit">
            </form>
        </div>
  
    </div>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/56c1ac89b8.js" crossorigin="anonymous"></script>
</html>