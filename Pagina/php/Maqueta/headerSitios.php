<?php

echo "<header class='site-header'> 

<div class='logo'>
  <a href='../index.php'><img src='../imagenes/Logo/logo_asociacion_blanco-300x76.png'></a>
</div>

<div class='botones' id='desplegable'>
  <ul>
    <li><b><a href='presentacion.php'>PRESENTACIÓN</a></b></li>
    <li><b><a href='acciones_realizadas.php'>HISTORIA</a></b></li>
    <li><b><a href='catedraAbierta.php'>CATEDRA ABIERTA</a></b></li>
    <li><b><a href='desarme.php'>DESARME</a></b></li>
    <li><b><a href='noticias.php'>NOTICIAS</a></b></li>
    <li><b><a href='contacto.php'>CONTACTO</a></b></li>
  </ul>
</div>
<button class='menuH' onclick='desplegar()'>
      <spam class='bar'></a></spam>
      <spam class='bar'></a></spam>
      <spam class='bar'></a></spam>
  </button>
</header>
<script>
function desplegar() {
    var menu = document.getElementById('desplegable');
    header.classList.toggle('headerBG');
    menu.classList.toggle('click');
  }
</script>
"

?>