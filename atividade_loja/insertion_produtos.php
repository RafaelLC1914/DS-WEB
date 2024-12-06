<?php
include_once('conexão.php');


$nome=$_POST['nome'];
$valor=$_POST['valor'];
$estoque=$_POST['estoque'];

$sql = "INSERT INTO produtos (nome, valor,estoque) VALUES ('$nome','$valor','$estoque')";
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('Location: cliente_produtos.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>          