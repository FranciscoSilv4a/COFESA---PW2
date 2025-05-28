<?php
    session_start();
    $_SESSION['acessoLogin'] = false;
    $_SESSION['acessoMenu'] = false;
    $erro = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if(!empty($nome) && !empty($email) && !empty($senha)) {
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['acessoLogin'] = true;
            header("Location: login.php");
            exit();
        }
        else {
            $erro = "Erro: usuário/email/senha inválidos";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Registro</title>
</head>
<body>
    <div class="container-menu">
        <p id = container-title>Registro</p>
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

          <button type="submit" class="btn">Cadastrar</button>
            <?php if(!empty($erro)): ?>
                <p style = "color: red" id = "erroMensagem"><?= $erro; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
