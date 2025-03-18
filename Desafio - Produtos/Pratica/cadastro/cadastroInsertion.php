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


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script>alert('Está faltando o método POST'); window.location.href = './index.php';</script>";
    exit();
}

$nome = $_POST["nome"];
$cargo = $_POST["cargo"];
$email = $_POST["email"];
$senha = $_POST["senha"];

include "cadastroValida.php";

if (validarDadosCadastro($nome, $cargo, $email, $senha)) {
    include "..\conexao.php";

    echo "<h2>Inserindo dados</h2>";

    // Criptografar a senha antes de salvar
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $statement = $db->prepare("INSERT INTO admnistrador (nome, cargo, email, senha) VALUES (:nome, :cargo, :email, :senha)");
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':cargo', $cargo);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':senha', $senha);
    $statement->execute();
}

header("Location: ./index.php");
?>
