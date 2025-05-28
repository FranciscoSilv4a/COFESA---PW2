<?php
    // usado para lidar com pessoas que acessam páginas pela URL sem permissão ou seguirem o fluxo esperado no site
    session_start();
    if($_SESSION['acessoLogin'] === false) {
        header("Location: index.php");
        exit();
    }
    else if($_SESSION['acessoMenu'] === false) {
        header("Location: login.php");
        exit();
    }
?>