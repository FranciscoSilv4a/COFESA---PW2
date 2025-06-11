<?php
    session_start();
    session_unset();
    file_put_contents("usuarios.txt", "");
    session_destroy();
    header("Location: index.php");
    exit();
?>