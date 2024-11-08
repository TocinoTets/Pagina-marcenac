<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estiloNoticias.css">
    <script src="js/js.js" defer></script>
    <title>Alfredo Marcenac - Asosiación Civil</title>
</head>
<body> 
        <?php
       if(isset($_SESSION)){
        mysqli_close($conexion);//se cierra la conexion a la base de datos
      }
        require ("php/Maqueta/header.php");
        
        ?>
    <main>
        <div class="portada" style="background-image:URL('imagenes/Portada/slider-a.jpg')"><p>Noticias</p></div>

        <div class="gap">
            <p><a href="index.php">Home</a></p> <p>/Noticias</p>
        </div>

        <br>
                    <?php
                    echo'<div id="contenedorNoticia">';
                        require("php/conexion.php");
                        
                        $sql = "SELECT * FROM noticias ORDER BY idNoticia DESC";

                        $respuesta = mysqli_query($conexion,$sql);

                        if (mysqli_num_rows($respuesta)>0)
                        {
                            while ($filas = mysqli_fetch_assoc($respuesta))
                            {
                                
                                        echo '<div class="noticia">
                                            <div class="tituloNoticia">'.$filas['tituloNoticia'].'</div>
                                            <div class="contenidoNoticia">
                                                <div class="descripcionNoticia"><p>'.$filas['descripcionNoticia'].'</p>
                                                <p>Publicado:'.$filas['fechaPublicacion'].'</p></div>
                                                <div class="imagenNoticia"><img src="'.$filas['direccionImagen'].'"></div>
                                            </div>
                                        </div>';
                                    
                            }
                        }
                        echo '</div>';
                    ?>
        <?php
       
       require ("php/Maqueta/footer.php");
       
       ?>
   </main>
</body>
</html>