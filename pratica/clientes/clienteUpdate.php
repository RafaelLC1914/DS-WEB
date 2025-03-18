<?php
    session_start();
    include_once('..\conexao.php');

    // Verifica se o usuário está logado corretamente
    if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
        header("Location: ..\login.php");
        exit();
    }    

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo"<script>alert('Está faltando o método POST')
            window.location.href = 'cliente.php';
        </script>";
    }
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $observacao = $_POST["observacao"];
    $id = $_GET['id'];

    include "../conexao.php";

    $statement = $db->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao = :observacao WHERE id = :id");
    $statement->bindParam(':nome', $nome );
    $statement->bindParam(':email', $email );
    $statement->bindParam(':observacao', $observacao );
    $statement->bindParam(':id', $id);
    $statement->execute();

    header("Location: cliente.php");
?>