<?php
  session_start();
  if(!isset($_SESSION['logouPrimaVez'])) {
    $_SESSION['acessoPagamento'] = false;
  }
  $_SESSION['pagou'] = false;
  file_put_contents("usuarios.txt","", FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="Imagens/cofesa icon.png">
    <script defer src = "js/mercado.js"></script>
    <title>Polos</title>
</head>
<body>
    <!--container-social-->
    <div class="container-social">
    <img src="https://img.icons8.com/?size=100&id=9720&format=png&color=FD7E14" height="50vh" id="carrinho">

    <div class="container-carrinhoMenu">
      <a href="#">Ver carrinho</a>
      <a href="#">Finalizar compra</a>
      <a href="#">Meus pedidos</a>
    </div>

    <p id = "redes-sociais">Redes Sociais:</p>
    <a href="https://www.facebook.com/cofesamaxitapeva/?locale=pt_BR"><img src="https://img.icons8.com/?size=100&id=8818&format=png&color=FD7E14" height="50vh"></a>
    <a href="https://www.instagram.com/cofesamaxsupermercado/"><img src="https://img.icons8.com/?size=100&id=32309&format=png&color=FD7E14 " height="50vh"></a>
   </div>
    <!--container-social Fim-->

    <!--home-->
    <div class="home">
    <img src="Imagens/Cofesa Logo.png" height="60vh">
      <ul class="home-itens">
          <li><a href="mercado.php" id = "polos" style = "background-color: rgb(0, 176, 0); color: white; width: 10vh; height: 6vh; border-radius: 5px;">POLOS</a></li>
          <li><a href="produtos.php">PRODUTOS</a></li>
          <li><a href="login.php">LOGIN</a></li>
      </ul>
    </div>
    <!--home Fim-->

    <!--container-polos-->
    <div class="container-polos">
      <h1 id="titulo-slider"></h1>
    <!--container-slider-->
      <div class="container-slider" id="container-slider">
        <button id="button1"><img src="Imagens/next.png" alt="button1"></a></button>
    <!--container-image-->
        <div class="container-image">
          <img src="Imagens/Cofesa 1.jpg" id="imagem 1" class="slider on">
          <img src="Imagens/Cofesa 2.jpg" id="imagem 2" class="slider">
          <img src="Imagens/Cofesa 3.jpg" id="imagem 3" class="slider">
          <img src="Imagens/Cofesa 4.jpg" id="imagem 4" class="slider">
          <img src="Imagens/Cofesa 5.jpg" id="imagem 5" class="slider">
          <img src="Imagens/Cofesa ADM.jpg" id="imagem 6" class="slider">
        </div>
    <!--container-image Fim-->
        <button id="button2"><img src="Imagens/next.png" alt="button2"></a></button>
      </div>
    <!--container-slider Fim-->
    </div>
</body>
</html>
