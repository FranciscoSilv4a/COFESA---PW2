<?php
    session_start();
    if($_SESSION['acessoMenu'] === false) {
        header("Location: invasores.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produtos.css">
    <title>Produtos</title>
</head>
<body>
     <div class="container-items">
      
          <div class="amido">
      <span class = "spanDisplay">title-img1</span>
      <img src="imagens/img1.webp" alt="Amido de Milho Maizena 200g" class = "display-produtos" id = "produto1">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>

      <div class="arroz">
      <span class = "spanDisplay">title-img2</span>
      <img src="imagens/img2.webp" alt="Arroz Tipo 1 Solito Pacote 5kg" class = "display-produtos" id = "produto2">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>

      <div class="acucar">
      <span class = "spanDisplay">title-img3</span>
      <img src="imagens/img3.webp" alt="Açucar Refinado União Fit Light 500g" class = "display-produtos" id = "produto3">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>

      <div class="coca-cola">
      <span class = "spanDisplay">title-img4</span>
      <img src="imagens/img4.webp" alt="Coca-Cola Original 1l" class = "display-produtos" id = "produto4">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>

      <div class="farinha-trigo">
      <span class = "spanDisplay">title-img5</span>
      <img src="imagens/img5.webp" alt="Farinha de Trigo Tipo 1 Anaconda 5kg" class = "display-produtos" id = "produto5">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>
      
      <div class="alcatra">
      <span class = "spanDisplay">title-img6</span>
      <img src="imagens/img6.webp" alt="Alcatra Bovina" class = "display-produtos" id = "produto6">
      <button class = "btnDisplayCarrinho">Adicionar ao carrinho</button>
      </div>
      
    </div>
</body>
</html>