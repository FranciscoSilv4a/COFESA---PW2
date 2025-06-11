<?php
    session_Start();
    if($_SESSION['pagou'] !== true) {
        if($_SESSION['acessoPagamento'] === true) {
            header("Location: pagamento.php");
            exit();
        }
        else {
            header("Location: index.php");
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Efetuada</title>
    <link rel = "stylesheet" href = "css/fim.css">
</head>
<body>
    <div class="fimContainer">
        <h1>Compra efetuada com sucesso!</h1><br>
        <button class = "btnFim" id = "btn1"><a href="produtos.php">Ok</a></button>
        <button class = "btnFim" id = "btn2" style = "background-color: rgb(255, 15, 15)"><a href="destroy.php">Destroy</a></button>
    </div>
</body>
</html>