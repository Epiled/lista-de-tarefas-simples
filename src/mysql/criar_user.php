<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$senhaHash = hash('sha256', $senha);

require_once('db_class.php');

$objDb = new DatabaseConnection();
$conn = $objDb->getConnection();

$usuario = mysqli_real_escape_string($conn, $usuario);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (empty($usuario) || empty($senha) || empty($email)) {
  header('Location: ../index.html');
  exit;
}

$sqlVerificarUsuario = "SELECT * FROM `usuarios` WHERE `userName` = ?";
$stmtVerificarUsuario = $conn->prepare($sqlVerificarUsuario);
$stmtVerificarUsuario->bind_param("s", $usuario);
$stmtVerificarUsuario->execute();
$resultVerificarUsuario = $stmtVerificarUsuario->get_result();

if ($resultVerificarUsuario->num_rows > 0) {
  echo 'Nome de usuário já existe.';
  exit;
}

$sql = "INSERT INTO `usuarios` (`userName`, `senhaUser`, `email`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if($stmt) {
  $stmt->bind_param("sss", $usuario, $senhaHash, $email);
  $stmt->execute();
  if ($stmt->affected_rows > 0) {
    header('Location: ../index.html');
    exit;
  } else {
    echo 'Ocorreu um erro ao criar um novo usuário tente novamente mais tarde';
  }

  $stmt->close();
} else {
  echo 'Ocorreu um erro ao criar um novo usuário tente novamente mais tarde';

}

$conn->close();
