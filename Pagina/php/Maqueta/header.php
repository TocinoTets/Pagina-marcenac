<?php

echo "<header class='site-header'> 

<div class='logo'>
  <a href='index.php'><img src='imagenes/Logo/logo_asociacion_blanco-300x76.png'></a>
</div>
<a class='menuH'></a>
<div class='botones'>
  <ul>
    <li><b><a href='presentacion.php'>PRESENTACIÓN</a></b></li>
    <li><b><a href='acciones_realizadas.php'>HISTORIA</a></b></li>
    <li><b><a href='catedraAbierta.php'>CATEDRA ABIERTA</a></b></li>
    <li><b><a href='desarme.php'>DESARME</a></b></li>
    <li><b><a href='noticias.php'>NOTICIAS</a></b></li>
    <li><b><a href='contacto.php'>CONTACTO</a></b></li>
  </ul>
</div>


</header>
"

?>

<script>
  //menu 
const menu = document.querySelector('.menuH');
const botones = document.querySelector('.botones');

// Get the modal
var modal = document.getElementsByClassName('botones');

menu.addEventListener('click',()=>{
    
    botones.classList.toggle("click");
})

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>