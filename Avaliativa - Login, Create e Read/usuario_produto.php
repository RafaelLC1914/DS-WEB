<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .usuarios_produto{
            display:flex;
            text-align:center;
            padding:20px;
            justify-content:center;
            gap:20px;
        }
        .usuario{
            border:2px solid #ccc;
            background-color: white;
            text-align:center;
            padding:20px;
            
        }
        .produtos{
            border:2px solid #ccc;
            background-color: white;
            text-align:center;
            padding:20px;
        }
        
        body{
            background-color: blue;
            
            
        }
        input{
            border: 2px solid #ccc;
            gap: 15px;
            border-radius:5px;
            margin-bottom:15px;
            
        }
        </style>
</head>
<body>
<div>
<a href="logout.php"><button>logout</button></a>
<a href="salvar_Cookies.php"><button>salvar</button></a>
</div>
<div class = "usuarios_produto"> 
    <div class ="produtos">
        <h1>Produtos</h1>
        <form action = "insertion_produtos.php" method='POST'>
            <label>nome: </label>
            <input type='text'id="nome"name='nome'>
            <br>
            <label>descrição: </label>
            <input type='descrição'id="descricao" name='descrição'>
            <br>
            <label>preço: </label>
            <input type='text'id="preço" name='preço'>
            <br>
            <input type='submit' value ='enviar' >
        </form>
        <?php
        include_once('conexao.php');
    echo'<br>';

$sql = "SELECT * FROM produtos ";
$resultado = mysqli_query($conexao, $sql);
// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
while ($linha = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $linha['id'] . "  Nome: " . $linha['nome'] ."  descrição: " . $linha['descricao'] ."  preço: " . $linha['preco'] . "<br>";
}
} else {
echo "Nenhum registro encontrado.";
}
    ?>
    </div>
    <div class = "usuario">
        <h1>Usuarios</h1>
        <form action = "insertion_usuario.php" method='POST'>
            <label>nome: </label>
            <input type='text'id="nome" name='nome'>
            <br>
            <label>email: </label>
            <input type='text'id="eamil" name='email'>
            <br>
            <label>senha: </label>
            <input type='text'id="senha" name='senha'>
            <br>
            <input type='submit'>
        </form>
       
        <?php
        include_once('conexao.php');
        echo'<br>';
    
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexao, $sql);
// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
while ($linha = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $linha['id'] . "Nome: " . $linha['Nome'] ."email: " . $linha['Email']. "senha: " . $linha['Senha']."<br>";
}
} else {
echo "Nenhum registro encontrado.";
}
?>

</div>
</div>    
</body>
</html>
