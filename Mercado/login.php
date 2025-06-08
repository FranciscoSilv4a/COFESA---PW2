<?php
    session_start();
    $erro = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $senha = $_POST['senha'];
            if(!empty($nome) && !empty($email) && !empty($senha)) {
                $usersArr = file("usuarios.txt", FILE_IGNORE_NEW_LINES);
                foreach($usuarios as $linha) {  //  estourando cada linha p pegar informações e depois verificar :)
                    $dados = explode(':', linha, 3);
                    if($dados !== 3) continue;
                    list($nomeArmazenado, $emailArmazenado, $senhaArmazenada) = $dados;
                    //  verificação de um por um dos dados de cada linha
                    if($nome === $nomeArmazenado && $email == $emailArmazenado && password_verify($senha, $senhaArmazenada)) {
                        $_SESSION['acessoPagamento'] = true;
                        $_SESSION['nome'] = $nome;
                        header("Location: pagamento.php");
                        exit();
                    }
                }
            }
            $erro = "Usuário/email/senha inválidos";
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
