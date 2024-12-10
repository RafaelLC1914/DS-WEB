<?php
include_once('conexao.php');


$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "INSERT INTO usuario(Nome,Email,Senha) VALUES ('$nome','$email','$senha')";
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('Location: usuario_produto.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>          