<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
  <p><a href="logout.php">Sair</a></p>
</body>
</html>