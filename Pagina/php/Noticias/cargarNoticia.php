<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/portada.css">
    <link rel="stylesheet" href="../../estilos/maqueta.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap-grid.css">
    <title>Cargar Noticias</title>
</head>
<body>
    
        <?php
       
       require ("../Maqueta/headerNoticias.php");
        
      ?>
      <main>
      <div class="portada" style="background-image:URL('../../imagenes/Portada/slider-a.jpg')">
        <p>Cargar Noticia</p>
      </div>
      <center>
    <?php
    session_start();
    if(isset($_SESSION['tipoUsuario']))
    {

    }else{
        header("Location: ../../index.php");
    }
    
        include_once("../conexion.php");
        
        if (!isset($_SESSION['tipoUsuario'])) {
            echo ' 
            <form action="formLogin.php" method="post" style=margin:5%;margin-left:45%>
            <button type="submit">Iniciar Sesion</button>
            </form>
            
            ';
        } else {
            echo "
            <div class='card' style='margin: 3%; width: 25rem;'>
                <div class='formulario'>
                    <form action='../../sitios/cargarDatosNoticia.php' method='post' enctype='multipart/form-data' style='text-align:center;'>
                        <div class='card-body'>
                            <div class='mb-3'>
                                <label>Titulo: </label>
                                <input type='text' name='titulo' placeholder='titulo de la noticia' required>
                            </div>
                            <br>
                            <div class='mb-3'>
                                <label>Contenido: </label>
                                <textarea name='descripcion' rows=5 cols=40 maxlength=500 placeholder='Informacion sobre la noticia' required></textarea>
                            </div>
                            <br>
                            <div class='mb-3'>
                                <label>Imagen: </label>
                                <input type='file' name='archivoAsubir' id='archivoAsubir' required>
                            </div>
                            <br>
                            <button type='submit' class='btn btn-warning'>Publicar Noticia</button>
                        </div>
                    </form>
                    <a href='mostrarNoticias.php'><button class='btn btn-warning'>Ver todas las noticias</button></a> 
                </div>
            </div>";
            
        }
        echo '</main>';
        require ("../Maqueta/footerNoticias.php");
    ?>
    <script src="../../js/js.js" defer></script>
    
</body>
</html>