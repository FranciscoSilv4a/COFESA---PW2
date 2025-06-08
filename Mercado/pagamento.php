<?php
    session_start();
    if($_SESSION['acessoPagamento'] !== true) {
        header("Location: cad.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel = "stylesheet" href = "css/pagamento.css">
</head>
<body>
<div class="container-social">
      <img src="https://img.icons8.com/?size=100&id=9720&format=png&color=FD7E14" height="50vh" id="carrinho">

      <div class="container-carrinhoMenu">
        <a href="#">Ver carrinho</a>
        <a href="#">Meus pedidos</a>
      </div>

        <span id = "pageTitle">PAGAMENTO</span>

      <p id = "redes-sociais">Redes Sociais:</p>
      <a href="https://www.facebook.com/cofesamaxitapeva/?locale=pt_BR"><img src="https://img.icons8.com/?size=100&id=8818&format=png&color=FD7E14" height="50vh"></a>
      <a href="https://www.instagram.com/cofesamaxsupermercado/"><img src="https://img.icons8.com/?size=100&id=32309&format=png&color=FD7E14 " height="50vh"></a>
   </div>
    <!--container-social Fim-->

    <!--home-->
    <div class="home">
    <img src="Imagens/Cofesa Logo.png" height="60vh">
      <ul class="home-itens">
          <li><a href="mercado.php" id = "polos">POLOS</a></li>
          <li><a href="produtos.php">PRODUTOS</a></li>
      </ul>
    </div>
    <!--home Fim-->
</body>
</html>