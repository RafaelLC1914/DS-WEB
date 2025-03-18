<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

// Verifica se o cargo do usuário logado é "chefe" ou "gerente"
if ($_SESSION['cargo'] !== "chefe" && $_SESSION['cargo'] !== "gerente") {
    echo "<script>alert('Acesso negado! Apenas usuários com cargo de Chefe ou Gerente podem acessar esta página.'); window.location.href = '../index.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Cadastro</title>
    <link rel="shortcut icon" href="../assets/img/icon.svg" type="imagex/png">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>

    <div class="container">
        <div class="formulario">
            <form action="cadastroInsertion.php" method="POST" onsubmit="return validarDadosCadastro()">
                <label>Nome: </label>
                <input type="text" name="nome" required >
                <p class="erro-input" id="erro-nome">
                    <?= isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : ""; ?>
                </p>

                <label>Cargo: </label>
                <select name="cargo" required>
                    <option value="">Selecionar...</option>
                    <option value="administrador">Administrador</option>
                    <option value="gerente">Gerente</option>
                    <option value="chefe">Chefe</option>
                </select>
                <p class="erro-input" id="erro-cargo">
                    <?= isset($_SESSION['erroCargo']) ? $_SESSION['erroCargo'] : ""; ?>
                </p>

                <label>Email: </label>
                <input type="text" name="email" required >
                <p class="erro-input" id="erro-email">
                    <?= isset($_SESSION['erroEmail']) ? $_SESSION['erroEmail'] : ""; ?>
                </p>

                <label>Senha: </label>
                <input type="password" name="senha" required >
                <p class="erro-input" id="erro-senha">
                    <?= isset($_SESSION['erroSenha']) ? $_SESSION['erroSenha'] : ""; ?>
                </p>
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>

    <!-- Tabela de Administradores -->
    <h2>Lista de Administradores</h2>
    <table id="clientes">
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Email</th>
            <th>Excluir</th>
        </tr>
        <?php
        $dadosAdmin = $db->query("SELECT * FROM admnistrador");
        $admins = $dadosAdmin->fetchAll(PDO::FETCH_ASSOC);
        foreach($admins as $admin){
            $idAdmin = $admin['id'];
            $nomeAdmin = $admin['nome'];
            $cargoAdmin = $admin['cargo'];
            $emailAdmin = $admin['email'];
            $senha = $admin['senha'];
            

            echo "
                <tr>
                    <td>$nomeAdmin</td>
                    <td>$cargoAdmin</td>
                    <td>$emailAdmin</td>
                    <td><a class='link-exclusao' href='cadastroDelete.php?id=$idAdmin'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
            ";
        }
        ?>
    </table>

</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/56c1ac89b8.js" crossorigin="anonymous"></script>
</html>
