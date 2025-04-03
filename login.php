<?php
session_start();
$error = isset($_GET['error']) ? 'Usuário ou senha inválidos' : '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <?php if ($error) echo "<p style='color: red;'>$error</p>"; ?>
  <form action="processa-login.php" method="post">
    <label>Usuário: <input type="text" name="usuario" required></label><br>
    <label>Senha: <input type="password" name="senha" required></label><br>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>