<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/portada.css">
    <link rel="stylesheet" href="../../estilos/maqueta.css">
    <title>Cargar Noticias</title>
</head>
<body>
        <?php
       
       require ("../Maqueta/header.php");
        
      ?>
      <main>
      <div class="portada" style="background-image:URL('../../imagenes/Portada/slider-a.jpg')">
        <p>Cargar Noticia</p>
      </div>
    <?php
        include_once("../conexion.php");
        session_start();
        if (!isset($_SESSION['tipoUsuario'])) {
            echo ' 
            <form action="formLogin.php" method="post" style=margin:5%;margin-left:45%>
            <button type="submit">Iniciar Sesion</button>
            </form>
            
            ';
        } else {
            echo "<div class='formulario'>
                <form action='../../cargarDatosNoticia.php' method='post' enctype='multipart/form-data' style='text-align:center;'>
                    <label>Titulo</label>
                    <input type='text' name='titulo' placeholder='titulo de la noticia'>
                    <br><br>

                    <label>Contenido</label>
                    <textarea name='descripcion' rows=5 cols=50 maxlength=500 placeholder='Informacion sobre la noticia'></textarea>
                    <br><br>

                    <label>Imagen</label>
                    <input type='file' name='archivoAsubir' id='archivoAsubir'>

                    <br><br>
                    <input type=submit value='Publicar Noticia'>
                </form> 
            </div>";
        }
        echo '</main>';
        require ("../Maqueta/footer.php");
    ?>
    <script src="../../js/js.js" defer></script>
</body>
</html>