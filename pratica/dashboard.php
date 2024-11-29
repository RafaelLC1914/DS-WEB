<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "logout.php" method="POST">
        <button type = "submit" name = "logout.php">encerar sessão </button>
    </form>

    <form action = "salvar.php" method="POST">
        <button type = "submit" name = "salvar.php">salvar </button>
    </form>


    
</body>
</html>
<?php

    session_start();
    $loginCerto = 'rafael';
    $senhaCerto = '123';


    if(isset($_POST['login'])){
        if( $loginCerto == $_POST['login'] and   $senhaCerto ==  $_POST['senha']){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
        }
    }
    if(isset($_POST['login']) and isset ($_SESSION['senha'])){
        echo '<br>';
        echo $_POST['login'];
        echo '<br>';
        echo $_POST['senha'];
        echo '<br>';
    }else{
        header('Location: index.php');
        
    }

    