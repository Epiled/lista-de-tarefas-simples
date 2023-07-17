<header class="menu" data-menu>
  <span class="menu__user"><?= $_SESSION['username'] ?></span>
  <nav class="menu__navegacao">
    <a class="menu__link" href="./tarefas.php">
      <img class="menu__icon" src="./assets/svg/tarefa.svg" width="30" height="30" alt="">
      Tarefas
    </a>
    <a class="menu__link" href="./adicionar-tarefa.php">
      <img class="menu__icon" src="./assets/svg/adicionar.svg" width="30" height="30" alt="">
      Adicionar Tarefa
    </a>
    <a class="menu__link" href="./mysql/logout.php">
      <img class="menu__icon" src="./assets/svg/sair.svg" width="30" height="30" alt="">
      Sair
    </a>
  </nav>

  <button class="menu__btn" data-menu-abrir>
    <img class="menu__icon" src="./assets/svg/abrir.svg" width="30" height="30" alt="">
  </button>
  <button class="menu__btn" disabled data-menu-fechar>
    <img class="menu__icon" src="./assets/svg/fechar.svg" width="30" height="30" alt="">
  </button>
</header>