<?php

session_start();

$tituloTarefa = $_POST['tituloTarefa'];
$descricaoTarefa = $_POST['textoTarefa'];
$usuarioCriador = $_SESSION['username'];

require_once('db_class.php');

$objDb = new DatabaseConnection();
$conn = $objDb->getConnection();

$tituloTarefa = mysqli_real_escape_string($conn, $tituloTarefa);
$descricaoTarefa = mysqli_real_escape_string($conn, $descricaoTarefa);

$sql = "INSERT INTO `artigos` (`titulo`, `descricao`, `criador`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
  $stmt->bind_param("sss", $tituloTarefa, $descricaoTarefa, $usuarioCriador);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    header('Location: ../tarefas.php');
    exit;
  } else {
    echo 'Ocorreu um erro ao criar um novo usu´rio tente novamente mais tarde';
  }

  $stmt->close();
} else {
  echo 'Ocorreu um erro ao criar um novo usu´rio tente novamente mais tarde';
}

$conn->close();
?>

$conn->close();