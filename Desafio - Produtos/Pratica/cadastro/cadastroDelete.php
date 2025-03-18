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


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verifica se o ID é válido
    if (is_numeric($id)) {
        include "../conexao.php";

        // Prepara a consulta para deletar o administrador pelo ID
        $stmt = $db->prepare("DELETE FROM admnistrador WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Administrador deletado com sucesso!'); window.location.href = './index.php';</script>";
        } else {
            echo "<script>alert('Erro ao deletar o administrador. Nenhum administrador encontrado com esse ID.'); window.location.href = './index.php';</script>";
        }
    } else {
        echo "<script>alert('ID inválido.'); window.location.href = './index.php';</script>";
    }
} else {
    echo "<script>alert('ID não fornecido.'); window.location.href = './index.php';</script>";
}
?>
