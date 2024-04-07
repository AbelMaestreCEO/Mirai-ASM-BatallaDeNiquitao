<div class="pie-icon pie-derecha blur blur-blanco borde-negro ">
    <a href="../Configuracion/hogar-configuraciones.php"><div class="pointer-negro boton-pie borde-negro transicion-corta imagen-ajuste"></div></a>
</div>

<div class="pie-large pie-large-derecha pie-derecha blur blur-blanco borde-negro ">
    <a href="https://time.is/es/"><div class="pointer-negro boton-pie borde-negro transicion-corta imagen-reloj"></div></a>
    <p>
        <span id="hora"></span><br/>
        <span id="fecha"></span>
    </p>
</div>

<script>
  var upDate = function() {
    var elFecha = document.querySelector("#fecha");
    var elHora = document.querySelector("#hora");
    var nowDate = moment(new Date());
    elHora.textContent = nowDate.format('HH:mm:ss');
    elFecha.textContent = nowDate.format('DD [/] MMM [/] YYYY ');
  }
  setInterval(upDate, 1000);
</script>