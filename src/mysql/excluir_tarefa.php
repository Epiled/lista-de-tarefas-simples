<?php
session_start();

$tarefa = $_GET['id'];

require_once('db_class.php');

$objDb = new DatabaseConnection();
$conn = $objDb->getConnection();

$sql = "DELETE FROM `artigos` WHERE `id_artigo` = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
  $stmt->bind_param("i", $tarefa);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    header('Location: ../tarefas.php');
  } else {
    echo 'Ocorreu um erro ao deletar a tarefa. Por favor, tente novamente mais tarde.';
  }

  $stmt->close();
} else {
  echo 'Ocorreu um erro ao preparar a consulta. Por favor, tente novamente mais tarde.';
}

$conn->close();
