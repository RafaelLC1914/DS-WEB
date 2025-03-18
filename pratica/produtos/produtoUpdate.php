<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

?>
<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo"<script>alert('Está faltando o método POST')
            window.location.href = '.\produto.php';
        </script>";
    }

    $id = $_GET["id"];
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $estoque = $_POST["estoque"];
    $preco = $_POST["preco"];

    include '..\conexao.php';

    $statement = $db->prepare("UPDATE produto SET codigo = :codigo, nome = :nome, estoque = :estoque, preco = :preco WHERE id = :id");
    $statement->bindParam(':id', $id);
    $statement->bindParam(':codigo', $codigo );
    $statement->bindParam(':nome', $nome );
    $statement->bindParam(':estoque', $estoque);
    $statement->bindParam(':preco', $preco );  
    $statement->execute();

    header("Location: produto.php");
?>