<?php
session_start();
require_once 'conexao.php'; // Inclui a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

// Prepara a consulta
$stmt = $db->prepare("SELECT * FROM admnistrador WHERE nome = :nome AND cargo = :cargo AND email = :email AND senha = :senha");

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":cargo", $cargo);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha); // Senha ainda está em texto puro (não recomendado)

$stmt->execute();

// Verifica se encontrou um usuário
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Armazena os dados na sessão
    $_SESSION['login'] = $user['nome'];
    $_SESSION['cargo'] = $user['cargo'];
    $_SESSION['email'] = $user['email'];

    // Redireciona para index.php
    header("Location: index.php");
    exit();
} else {
    echo "<script>alert('Login inválido! Verifique os dados e tente novamente.'); window.location.href='login.php';</script>";
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./assets/img/icon.svg" type="imagex/png">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <center>
        <div class="container">
            <div class="formulario">
                <form action="" method="POST" required>
                    <label>Nome: </label>
                    <input type="text" name="nome" required>
                    <br><br>

                    <label>Cargo: </label>
                    <select name="cargo" required>
                    <option value="">Selecionar...</option>
                    <option value="administrador">Administrador</option>
                    <option value="gerente">Gerente </option>
                    <option value="chefe">Chefe</option>
                    </select>

                    <br><br>
                    <label>email: </label>
                    <input type="text" name="email" required>
                    <br> <br>
                    
                    <label>Senha: </label>
                    <input type="password" name="senha">
                    <br>
                    
                    <input type="submit">
                </form>
            </div>
        </div>
    </center>    
</body>
</html>