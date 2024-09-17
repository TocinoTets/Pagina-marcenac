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
        include_once("../conexion.php");
        session_start();
        if (!isset($_SESSION['tipoUsuario'])) {
            echo ' <main style="height:60vh; align-content:center;">
            <form action="formLogin.php" method="post">
            <button type="submit">Iniciar Sesion</button>
            </form>
            
            </main>';
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

        require ("../Maqueta/footer.php");
    ?>
    <script src="../../js/js.js" defer></script>
</body>
</html>