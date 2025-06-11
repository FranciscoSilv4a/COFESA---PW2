<?php
    session_start();
    $_SESSION['pagou'] = false;
    $erro = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = trim($_POST['email']);
            $senha = $_POST['senha'];
            if(!empty($email) && !empty($senha)) {
                $usuarios = file("usuarios.txt", FILE_IGNORE_NEW_LINES);
                foreach($usuarios as $linha) {  //  estourando cada linha p pegar informações e depois verificar :)
                    $dados = explode(':', $linha);
                    list($nomeArmazenado, $emailArmazenado, $senhaArmazenada, $enderecoArmazenado) = $dados;
                    //  verificação de um por um dos dados de cada linha
                    if($email == $emailArmazenado && $senha == $senhaArmazenada) {
                        $_SESSION['logouPrimaVez'] = 1;
                        $_SESSION['acessoPagamento'] = true;
                        $_SESSION['usuario'] = $nomeArmazenado;
                        header("Location: pagamento.php");
                        exit();
                    }
                    else {
                        $erro = "Email/senha não correspondentes";
                    }
                }
            }
            $erro = "Email/senha inválidos";
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
        <form action= "login.php" method="POST">
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
        <a href="cad.php" id = "link" style = "color: rgb(250, 150, 0); margin-top: 1rem;">Não tenho cadastro</a>
    </div>
</body>
</html>
