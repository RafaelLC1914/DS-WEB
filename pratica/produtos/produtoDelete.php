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
    $id = $_GET['id'];
    include "../conexao.php";
    
    $stmt = $db->prepare("DELETE FROM produto WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount()>0){
        echo "Deletou ". $stmt->rowCount(). " linhas.";
    }else{
        echo "Não deletou nenhuma linha";   
    }
    header("Location: produto.php");
?>