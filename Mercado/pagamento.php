<?php
    session_start();
    if($_SESSION['acessoPagamento'] !== true) {
        header("Location: login.php");
        exit();
    }

    $produto = "Amido de milho";
    $preco = "R$30,00";
    $usuario = $_SESSION['usuario'];
    $endereco = "";

    $usuarios = file("usuarios.txt", FILE_IGNORE_NEW_LINES);
    foreach($usuarios as $linha) {
      $dados = explode(":", $linha);
      list($nomeArmazenado, $emailArmazenado, $senhaArmazenada, $enderecoArmazenado) = $dados;

      if($usuario == $nomeArmazenado) {
        $endereco = $enderecoArmazenado;
        break;
      }
    }
    $_SESSION['pagou'] = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_SESSION['pagou'] = true;
      header("Location: fim.php");
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
    <script defer src = "js/pagamento.js"></script>
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
          <li><a href="index.php" id = "polos">POLOS</a></li>
          <li><a href="produtos.php">PRODUTOS</a></li>
          <li><a href="login.php">LOGIN</a></li>
      </ul>
    </div>
    <!--home Fim-->
      <div class="infContainer">
      <center>
        <h2 style = "color: rgb(250, 150, 0)">Finalizar Compra</h2>
        <p><strong>Produto: </strong><?= $produto ?></p>
        <p><strong>Preço: </strong><?= $preco ?></p>
        <p><strong>Usuário: </strong><?= $usuario ?></p>
        <p><strong>Endereço de entrega: </strong><?= $endereco?></p>
        <form action="pagamento.php" method = "POST">
          <label for="formaPagamento" style = "color: rgb(250, 150, 0)"><strong>Forma de pagamento: </strong></label>
          <select name= "formaPagamento" id="formaPagamento" onchange = "mostrarCamposCartao()" required>
            <option value="pix">Pix</option>
            <option value="boleto">Boleto</option>
            <option value="cartao">Cartão</option>
          </select>
          <br>
          <br>
          <div id ="dadosCartao" style = "display: none">
            <h3 style = "color: rgb(250, 150, 0)"><strong>Informções do cartão de crédito</strong></h3>

            <label for = "numeroCartao">Número do cartão:</label>
            <input type = "text" name = "numeroCartao" maxlength = "16" oninput = "formatarNum(this)" required></input>
            <br>
            <!---->
            <label for = "nomeCartao">Titular do cartão:</label>
            <input type = "text" name = "nomeCartao" required></input>
            <br>
            <!---->
            <label for = "dataVencimento">Data de vencimento (MM/YY):</label>
            <input type = "text" name = "dataVencimento" maxlength = "5" placeholder = "MM/YY" oninput = "formatarData(this)" required></input>
            <br>
            <!---->
            <label for = "cvcCartao">CVC do cartão:</label>
            <input type = "text" name = "cvcCartao" maxlength = "3" oninput = "formatarNum(this)" required></input>
            <br>
          </div>

          <button type = "submit" id = "btnFinalizar">Finalizar compra</button>
        </form>
      </center>
      </div>
</body>
</html>