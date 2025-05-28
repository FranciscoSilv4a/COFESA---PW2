<?php
    session_start();
    $_SESSION['acessoMenu'] = false;
    $erro = "";
    if($_SESSION['acessoLogin'] == true) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            if(!empty($nome) && !empty($email) && !empty($senha)) {
                if($nome === $_SESSION['nome'] && $email === $_SESSION['email'] && $senha === $_SESSION['senha']) {
                    //...
                    $_SESSION['acessoMenu'] = true;
                    header("Location: mercado.php");
                    exit(); // só aqui o exit, se não quebra o código
                }
                else {
                    $erro = "Erro: usuário/email/senha não correspondentes";
                }
            }
            else {
                $erro = "Erro: usuário/email/senha inválidos";
            }
        }
    }
    else {
        header("Location: invasores.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container-menu">
        <p id = container-title>Login</p>
        <form action= "index.php" method="POST">
          <label for="nome">NOME:
          <input type="text" id="nome" name="nome"><br><br>
          </label>

          <label for="email">EMAIL:
          <input type="email" id="email" name="email"><br><br>
          </label>

          <label for="senha">SENHA:
          <input type="password" id="senha" name="senha"><br><br>
          </label>

          <button type="submit" class="btn">Logar</button>
            <?php if(!empty($erro)): ?>
                <p style = "color: red" id = "erroMensagem"><?= $erro; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
