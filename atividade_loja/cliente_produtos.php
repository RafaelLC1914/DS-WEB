<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cliente_produto{
            display:flex;
            text-align:center;
            padding:20px;
            justify-content:center;
            gap:20px;
        }
        .clientes{
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
<div class = "cliente_produto"> 
    <div class ="produtos">
        <h1>Produtos</h1>
        <form action = "insertion_produtos.php" method='POST'>
            <label>nome: </label>
            <input type='text'id="nome"name='nome'>
            <br>
            <label>valor: </label>
            <input type='text'id="volar" name='valor'>
            <br>
            <label>estoque: </label>
            <input type='text'id="estoque" name='estoque'>
            <br>
            <input type='submit' value ='enviar' >
        </form>
        <?php
        include_once('conexão.php');
    echo'<br>';

$sql = "SELECT * FROM produtos ";
$resultado = mysqli_query($conexao, $sql);
// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
while ($linha = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $linha['id'] . "  Nome: " . $linha['nome'] ."  valor: " . $linha['valor'] ."  estoque: " . $linha['estoque'] . "<br>";
}
} else {
echo "Nenhum registro encontrado.";
}
    ?>
    </div>
    <div class = "clientes">
        <h1>clientes</h1>
        <form action = "insertion_cliente.php" method='POST'>
            <label>nome: </label>
            <input type='text'id="nome" name='nome'>
            <br>
            <label>email: </label>
            <input type='text'id="eamil" name='email'>
            <br>
            <input type='submit' value ='enviar'>
        </form>
        <?php
        include_once('conexão.php');
        echo'<br>';
    
$sql = "SELECT * FROM cliente ";
$resultado = mysqli_query($conexao, $sql);
// Verificar se há registros
if (mysqli_num_rows($resultado) > 0) {
while ($linha = mysqli_fetch_assoc($resultado)) {
echo "ID: " . $linha['id'] . "  Nome: " . $linha['nome'] ."<br>";
}
} else {
echo "Nenhum registro encontrado.";
}
?>
    </div>
</div>    
</body>
</html>

