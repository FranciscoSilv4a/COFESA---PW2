<?php
    session_start();
    $erro = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = $_POST['senha'];
        $endereco = trim($_POST['endereco']);
        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($endereco)) {
            file_put_contents("usuarios.txt", "$nome:$email:$senha:$endereco\n", FILE_APPEND);
            $_SESSION['acessoPagamento'] = true;
            $_SESSION['usuario'] = $nome;
            header("Location: pagamento.php");
            exit();
        }
        else {
            $erro = "Usuário/email/senha/endereço inválidos";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad.css">
    <title>Registro</title>
</head>
<body>
    <div class="container-menu">
        <p id = container-title>Registro</p>
        <form action= "cad.php" method="POST">
          <label for="nome">NOME:
          <input type="text" id="nome" name="nome"><br><br>
          </label>

          <label for="email">EMAIL:
          <input type="email" id="email" name="email"><br><br>
          </label>

          <label for="senha">SENHA:
          <input type="password" id="senha" name="senha"><br><br>
          </label>

          <label for="endereco">ENDEREÇO:
          <input type="text" id="endereco" name="endereco"><br><br>
          </label>

          <button type="submit" class="btn">Cadastrar</button>
        </form>
        <?php if(!empty($erro)): ?>
            <p style = "color: red" id = "erroMensagem"><?= $erro; ?></p>
        <?php endif; ?>
        <a href="login.php" id = "link" style = "color: rgb(250, 150, 0);margin-top: 1rem;">Já tenho cadastro</a>
    </div>
</body>
</html>
