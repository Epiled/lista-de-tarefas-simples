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
  <link rel="stylesheet" href="./css/adicionar.css">
</head>

<body>
  <?php require_once('./includes/header.php'); ?>

  <main class="principal">
    <h1 class="principal__titulo">
      Adicionar Tarefa
    </h1>

    <form action="./mysql/criar_tarefa.php" method="post">
      <fieldset>
        <div class="adicionar__wrap">
          <label class="adicionar__etq" for="tituloTarefa">Titulo Tarefa:</label>
          <input required class="adicionar__ipt" name="tituloTarefa" type="text">
        </div>
        <div class="adicionar__wrap">
          <label class="adicionar__etq" for="textoTarefa">Descrição Tarefa:</label>
          <textarea required class="adicionar__ipt" name="textoTarefa" id="" cols="30" rows="10"></textarea>
        </div>
      </fieldset>
      <button class="adicionar__btn" type="submit">Salvar Tarefa</button>
    </form>
  </main>

  <script src="./js/menu.js"></script>
</body>

</html>