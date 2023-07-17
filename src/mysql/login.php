<?php
session_start();

$username = $_POST['usuario'];
$senha = $_POST['senha'];

require_once('db_class.php');

$objDb = new DatabaseConnection();
$conn = $objDb->getConnection();

$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  $senhaHash = hash('sha256', $senha); // Hash da senha fornecida

  if ($senhaHash === $row["senhaUser"]) { // Comparação segura da senha
    $_SESSION['username'] = $_POST['usuario'];
    header('Location: ../tarefas.php');
    exit;
  } else {
    echo 'Nome de usuário ou senha inválidos.';
  }
} else {
  echo 'Nome de usuário ou senha inválidos.';
}

$stmt->close();
$conn->close();
