const menu = document.querySelector('[data-menu]');
const menuAbrir = menu.querySelector('[data-menu-abrir]');
const menuFechar = menu.querySelector('[data-menu-fechar]');

menuAbrir.addEventListener('click', () => {
  menu.classList.toggle('menu--ativo');
  menuAbrir.disabled = true;
  menuFechar.disabled = false;
});

menuFechar.addEventListener('click', () => {
  menu.classList.toggle('menu--ativo');
  menuAbrir.disabled = false;
  menuFechar.disabled = true;
});