<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../estilos/portada.css">
    <link rel="stylesheet" href="../../estilos/maqueta.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap-grid.css">
</head>
<body>
    <?php
    require ("../Maqueta/headerNoticias.php");
    ?>
    <main>
    <div class="portada" style="background-image:URL('../../imagenes/Portada/slider-a.jpg')">
        <p>Iniciar Sesion</p>
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

    $sql = "SELECT * FROM noticias";

    $respuesta = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($respuesta))
        {
                
            while($fila = mysqli_fetch_assoc($respuesta))
            {
                echo '
                <div class="card" style="margin: 1%; width: 18rem;">
                    <div>
                        <label>Titulo:</label>
                        <label>'.$fila['tituloNoticia'].'</label>
                        <br>
                        <label>Descripcion:</label>
                        <label>'.$fila['descripcionNoticia'].'</label>
                        <br>
                        <label>Estado del proyecto:</label>
                        <label>'.$fila['Estado'].'</label>
                        <br>
                        <form action="eliminarNoticia.php" method="post">
                            <input type="hidden" name="idNoticia" value="'.$fila['idNoticia'].'">
                            <button type="submit" class="btn btn-warning">Eliminar</button>
                        </form>
                    </div>
                </div>
                <br>';
            }
        }
        echo '<a href="cargarNoticia.php"><button class="btn btn-warning">volver</button></a>';
        echo '</main>';
        
        require ("../Maqueta/footerNoticias.php");
    ?>
    
    
    <script src="../../js/js.js" defer></script>
</body>
</html>
