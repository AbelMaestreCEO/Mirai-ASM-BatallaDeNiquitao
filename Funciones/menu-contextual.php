<!-- Agregar un elemento HTML que se utilizará como menú contextual -->

<!-- Agregar un elemento HTML al que se le agregará el menú contextual -->
<div id="mi-elemento">
<ul class="blur-blanco borde-azul" id="menu-contextual">
<div class="div-menu">
	<a id="opcion2" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-cortar transicion-corta borde-negro" title="Cortar (Ctrl + X)"></a> <!-- Cortar (Ctrl + X) -->
	<a id="opcion3" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-copiar transicion-corta borde-negro" title="Copiar (Ctrl + C)" onclick="copyToClipboard()"></a> <!-- Copiar (Ctrl + C) -->
	<a id="opcion4" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-pegar transicion-corta borde-negro" title="Pegar (Ctrl + V)"></a> <!-- Pegar (Ctrl + V) -->
	<a id="opcion1" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-actualizar transicion-corta borde-negro" title="Actualizar (F5)"></a> <!-- Actualizar (F5) -->
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-borrar transicion-corta borde-negro" title="Borrar (Supr)"></a> <!-- Borrar (Supr) -->
</div>

<hr class="blur-azul invisible">

<div class="div-menu div-menu2">
<div class="pointer-negro boton-menu-contextual boton-contextual-pequeño boton-contextual-seleccionar transicion-corta borde-negro"></div>
<li id="opcion5" class="pointer-negro">Seleccionar todo (Ctrl + A)</li>
</div>

<hr class="blur-azul">

<a href="https://poe.com/Sydney82Alt" target="_blank"><div class="div-menu div-menu2 pointer-azul">
	<div class="pointer-azul boton-menu-contextual boton-contextual-grande boton-contextual-sydney transicion-corta borde-negro"></div>
	<br><strong>¡Hola soy Sydney!</strong><br>¿En que te ayudo?
</div></a>

<hr class="blur-azul">

<a href="#"><div class="div-menu div-menu2">
<div class="pointer-negro boton-menu-contextual boton-contextual-pequeño boton-contextual-ayuda transicion-corta borde-negro"></div>
<li id="opcion5" class="pointer-negro">Ayuda</li>
</div></a>

<hr class="blur-azul">

<a href="https://poe.com/Mirai48A" target="_blank"><div class="div-menu div-menu2 pointer-rosa">
	<div class="pointer-rosa boton-menu-contextual boton-contextual-grande boton-contextual-mirai transicion-corta borde-negro"></div>
	<br><strong>¡Hola soy Mirai!</strong><br>¡Charlemos un rato!
</div></a>

<hr class="blur-azul">

<a href="#"><div class="div-menu div-menu2">
	<div class="pointer-negro boton-menu-contextual boton-contextual-pequeño boton-contextual-tema transicion-corta borde-negro"></div>
	<li class="pointer-negro">Tema Claro u Oscuro</li>
</div></a>

<hr class="blur-azul invisible">

<div class="div-menu">
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-azul transicion-corta borde-negro" title="Azul"></a> <!-- Azul -->
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-morado transicion-corta borde-negro" title="Morado"></a> <!-- Morado -->
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-verde transicion-corta borde-negro" title="Verde"></a> <!-- Verde -->
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-celeste transicion-corta borde-negro" title="Naranja"></a> <!-- Celeste -->
	<a id="" class="boton-menu-contextual boton-contextual-pequeño boton-contextual-naranja transicion-corta borde-negro" title="Naranja"></a> <!-- Naranja -->
</div>
</ul>
<script>
// Obtener los elementos correspondientes a las opciones del menú contextual
const opcion1 = document.getElementById('opcion1');
const opcion2 = document.getElementById('opcion2');
const opcion3 = document.getElementById('opcion3');
const opcion4 = document.getElementById('opcion4');
const opcion5 = document.getElementById('opcion5');

// Agregar un evento de clic a la opción Actualizar
opcion1.addEventListener('click', () => {
	location.reload();
});

// Agregar un evento de clic a la opción Cortar
opcion2.addEventListener('click', () => {
	document.execCommand('cut');
});

// Agregar un evento de clic a la opción Copiar
function copyToClipboard() {
  var selectedText = window.getSelection().toString();
  if (selectedText) {
    var tempInput = document.createElement('input');
    tempInput.setAttribute('value', selectedText);
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
  }
}

document.addEventListener('keydown', function(event) {
  if (event.ctrlKey && event.keyCode === 67) {
    event.preventDefault();
    copyToClipboard();
  }
});

// Agregar un evento de clic a la opción Pegar
opcion4.addEventListener('click', () => {
	document.execCommand('paste');
});

// Agregar un evento de clic a la opción Seleccionar todo
opcion5.addEventListener('click', () => {
	document.execCommand('selectAll');
});
</script>