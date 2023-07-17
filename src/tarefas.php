<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarefas</title>

  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/menu.css">
  <link rel="stylesheet" href="./css/principal.css">
  <link rel="stylesheet" href="./css/tarefas.css">
  <link rel="stylesheet" href="./css/card.css">

</head>

<body>
  <?php require_once('./includes/header.php') ?>

  <main class="principal">
    <h1 class="principal__titulo">
      Tarefas
    </h1>

    <div class="tarefas">
      <?php
      require_once('./mysql/db_class.php');

      $objDb = new DatabaseConnection();
      $conn = $objDb->getConnection();

      $sql = "SELECT * FROM `artigos`";
      $result = $conn->query($sql);

      // Verificar se a consulta retornou resultados
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="card" data-estado=' . $row['estado'] . '>';
          echo '<h2 class="card__titulo">' . $row['titulo'] . '</h2>';

          echo '<div class="card__tarefa">';
          echo '<p class="card__txt">';
          echo $row['descricao'];
          echo '</p>';
          echo '</div>';
          echo '<span class="card__user">' . $_SESSION['username'] . '</span>';
          echo '<div class="card__acoes">';
          echo '<a class="card__btn" href=./mysql/concluir_tarefa.php?id=' . $row['id_artigo'] . " " . 'class="listaAtg__btn">Concluir</a>';
          echo '<a class="card__btn card__btn--excluir" href=./mysql/excluir_tarefa.php?id=' . $row['id_artigo'] . " " . 'class="listaAtg__btn">Excluir</a>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo '<span class="tarefas__mensagem">Nenhuma tarefa listada<span>';
      }

      mysqli_close($conn);
      ?>

    </div>
  </main>

  <script src="./js/menu.js"></script>
</body>

</html>