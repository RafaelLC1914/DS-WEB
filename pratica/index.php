<?php
    if(isset($_SESSION['login']) && ($_SESSION['senha'])){
        echo 'voce conequitado como rafael';
    }else{
        echo'não esta conectado em nenhuma conta';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "conteiner">
        <form action = "dashboard.php"method="POST">
            <label>Login:</label>
            <input type="text" name="login">
            <br>
            <label>Senha:</label>
            <input type="text" name="senha">
            <input type = "submit">
        </form>
    </div>
</body>
</html>