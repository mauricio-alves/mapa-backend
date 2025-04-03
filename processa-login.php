<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'] ?? '';
  $senha = $_POST['senha'] ?? '';

  if ($usuario === 'admin' && $senha === '1234') {
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    exit();
  } else {
    header('Location: login.php?error=1');
    exit();
  }
}
?>