<?php
include_once('conexao.php');


$nome=$_POST['nome'];
$descrição=$_POST['descrição'];
$preço=$_POST['preço'];

$sql = "INSERT INTO produtos (nome, descricao,preco) VALUES ('$nome','$descrição','$preço')";
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('Location: usuario_produto.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>          