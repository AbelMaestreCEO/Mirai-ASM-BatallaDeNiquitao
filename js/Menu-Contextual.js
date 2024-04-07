// Seleccionar el elemento al que se agregará el menú contextual
const elemento = document.querySelector('#mi-elemento');

// Agregar un evento para detectar el clic derecho
elemento.addEventListener('contextmenu', (evento) => {
  evento.preventDefault(); // Evitar que se muestre el menú contextual predeterminado del navegador

  // Obtener la posición del puntero en la pantalla
  const posX = evento.pageX;
  const posY = evento.pageY;

  // Mostrar el menú contextual personalizado en la posición del puntero
  const menu = document.querySelector('#menu-contextual');
  menu.style.top = posY + 'px';
  menu.style.left = posX + 'px';
  menu.classList.add('visible');
  
});

// Ocultar el menú contextual personalizado al hacer clic en cualquier lugar de la página
document.addEventListener('click', () => {
  const menu = document.querySelector('#menu-contextual');
  menu.classList.remove('visible');
});
