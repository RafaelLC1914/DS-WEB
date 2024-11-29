<?php
session_start();

if (isset($_POST['action']) && $_POST['action']=='save'){
    $_SESSION['login'] = "rafael";
    $_SESSION['senha'] = "123";

setcookie('login',$_SESSION['login'], time() + 3600, "session/pratica/");
setcookie('login',$_SESSION['senha'], time() + 3600, "session/pratica/");
header("Location: index.php");

}

