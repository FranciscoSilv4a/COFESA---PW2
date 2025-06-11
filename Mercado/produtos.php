<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location: pagamento.php");
        exit();
    }
    $_SESSION['pagou'] = false;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produtos.css">
    <title>Produtos</title>
</head>
<body>
    <div class="container-social">
      <img src="https://img.icons8.com/?size=100&id=9720&format=png&color=FD7E14" height="50vh" id="carrinho">

      <div class="container-carrinhoMenu">
        <a href="#">Ver carrinho</a>
        <a href="#">Meus pedidos</a>
      </div>

        <span id = "pageTitle">PRODUTOS</span>

      <p id = "redes-sociais">Redes Sociais:</p>
      <a href="https://www.facebook.com/cofesamaxitapeva/?locale=pt_BR"><img src="https://img.icons8.com/?size=100&id=8818&format=png&color=FD7E14" height="50vh"></a>
      <a href="https://www.instagram.com/cofesamaxsupermercado/"><img src="https://img.icons8.com/?size=100&id=32309&format=png&color=FD7E14 " height="50vh"></a>
   </div>
    <!--container-social Fim-->

    <!--home-->
    <div class="home">
    <img src="Imagens/Cofesa Logo.png" height="60vh">
      <ul class="home-itens">
          <li><a href="index.php" id = "polos">POLOS</a></li>
          <li><a href="produtos.php" style = "background-color: rgb(0, 176, 0); color: white; width: 10vh; height: 6vh; border-radius: 5px;">PRODUTOS</a></li>
          <li><a href="login.php">LOGIN</a></li>
      </ul>
    </div>
    <!--home Fim-->
     <div class="container-items">
      
      <div class="amido">
      <span class = "spanDisplay">title-img1</span>
      <img src="imagens/img1.webp" alt="Amido de Milho Maizena 200g" class = "display-produtos" id = "produto1">
      <form action="produtos.php" method = "POST">
        <button type = "submit" class = "btnDisplayCarrinho">comprar</button>
      </form>
      </div>

    </div>
</body>
</html>