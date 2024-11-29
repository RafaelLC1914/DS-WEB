<?php


    session_start();

    setcookie('login','', time() - 3600, "session/pratica/");
    setcookie('senha','', time() - 3600, "session/pratica/");

    session_unset();

    session_destroy();

    


    header("Location: index.php");

  


?>