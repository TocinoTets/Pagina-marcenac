<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/portada.css">
    <link rel="stylesheet" href="../estilos/maqueta.css">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <link rel="stylesheet" href="../estilos/EstiloContacto.css">
    <script src="../js/js.js" defer></script>
    <title>Alfredo Marcenac - Asosiación Civil</title>
</head>
<body> 
 
    <main>

      <?php
      
      session_start();
        if(isset($_SESSION)){
            session_unset();
            session_destroy();
        }
       require ("../php/Maqueta/headerSitios.php");
        
        ?>
         <div class="portada" style="background-image:URL('../imagenes/Portada/slider-a.jpg')">
          <p>Contacto</p>
        </div>

        <div class="gap">
            <p><a href="../index.php">Home</a></p> <p>/Contacto</p>
        </div>

      <div class="form-contacto">
        <div class="info">
            <h1 class="texto1">Contactanos</h1>
            <p class="texto2">Gracias por visitarnos, a continuación le brindamos nuestros datos
            para contactarse con la Asociación.</p>
            <p class="texto3">contacto@alfredomarcenac.org</p>
            <p class="texto3"> +54 (9) 2262 43 2039</p>
            <p class="texto3">Calle 81 Nº 664 Necochea, Pcia. Buenos Aires, Argentina</p>
        </div>
        <div class="form-email">
          <form action="php/enviar.php" method="post">
            <h2 class="texto"> Enviar Mensaje</h2>
            <p class="texto">Su correo electrónico no sera publicado. (Datos obligatorios)</p>
              <input type="text" name="nombre"  class="form-email-txt" placeholder="Nombre" col><br>
              <input type="email" name="email"  class="form-email-txt" placeholder="Email"><br>
              <input type="text" name="asunto"  class="form-email-txt" placeholder="Asunto"><br>
              <textarea name="mensaje"  class="form-email-textarea" placeholder="Mensaje"></textarea>
              <input type="hidden" name="_captcha" value="false"><br>
              <input type="submit" value="Enviar" class="boton">
          </form>
        </div>
      </div>
        <?php
       
       require ("../php/Maqueta/footerSitios.php");
       
       ?>
   </main>
</body>
</html>