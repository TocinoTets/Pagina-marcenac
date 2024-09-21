<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estiloNoticias.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/js.js" defer></script>
    <title>Alfredo Marcenac - Asosiación Civil</title>
</head>
<body> 
    <main>

      <?php
       
       require ("php/Maqueta/header.php");
        
        ?>
        <div class="portada" style="background-image:URL('imagenes/Portada/slider-a.jpg')"><p>Noticias</p></div>

        <div class="gap">
            <p><a href="index.php">Home</a></p> <p>/Noticias</p>
        </div>

        <br>
        <div class="contenedorNoticias">
            <div class="container">
                <div class="row row-cols-3">

                    <?php
                        require("php/conexion.php");

                        $sql = "SELECT * FROM noticias ORDER BY idNoticia DESC";

                        $respuesta = mysqli_query($conexion,$sql);

                        if (mysqli_num_rows($respuesta)>0)
                        {
                            while ($filas = mysqli_fetch_assoc($respuesta))
                            {
                                echo'<div class="col">
                                        <div class="noticia">
                                            <div id="tituloNoticia"><h1>'.$filas['tituloNoticia'].'</h1></div>
                                            <div class="contenidoNoticia">
                                                <div id="descripcionNoticia"><p>'.$filas['descripcionNoticia'].'</p>
                                                <p>Publicado:'.$filas['fechaPublicacion'].'</p></div>
                                                <div id="imagenNoticia"><img src="'.$filas['direccionImagen'].'"></div>
                                            </div>
                                        </div>
                                </div>';
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
        <?php
       
       require ("php/Maqueta/footer.php");
       
       ?>
   </main>
</body>
</html>