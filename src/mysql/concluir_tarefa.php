<?php
session_start();

$artigo = $_GET['id'];

require_once('db_class.php');

$objDb = new DatabaseConnection();
$conn = $objDb->getConnection();

if (!is_numeric($artigo)) {
  echo 'ID inválido.';
  exit;
}

$sql = "UPDATE `artigos` SET `estado` = '1' WHERE `id_artigo` = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
  $stmt->bind_param("i", $artigo);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    header('Location: ../tarefas.php');
    exit;
  } else {
    echo 'Ocorreu um erro ao atualizar o estado da tarefa. Por favor, tente novamente mais tarde.';
  }

  $stmt->close();
} else {
  echo 'Ocorreu um erro ao preparar a consulta. Por favor, tente novamente mais tarde.';
}

$conn->close();
?>