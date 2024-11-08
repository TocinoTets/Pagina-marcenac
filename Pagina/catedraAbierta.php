<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estiloCatedra.css">
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
      
         <div class="portada" style="background-image:URL('imagenes/Portada/slider-a.jpg')"><p>Cátedra Abierta</p></div>
            <div class="gap">
                <p><a href="index.php">Home</a></p> <p>/Catedra abierta</p>
            </div>
         <div class="catedra">
            <p>Cátedra Abierta en Educación para la Paz «Alfredo Marcenac»
            En el año 2009 se crea la Cátedra Abierta de la Asociación (Res. 3868/09), en la Subsede Quequén de la Universidad Nacional del Centro de la Provincia de Buenos Aires, a partir de la cual se desarrollan tareas de capacitación docente y experiencias de trabajo territorial orientadas a la resolución pacífica de conflictos y al desarrollo humano. Actualmente y por Res.7400/19 (UNICEN), se denomina Cátedra Abierta en Educación para la Paz “Alfredo Marcenac”.
            </p>
        </div>
         </div>
        <div class="imagenes">
         <img src="imagenes/fotos marcenac/IMG_6564.jpg">
         <img src="imagenes/fotos marcenac/DSCN5457.jpg">
         <img src="imagenes/fotos marcenac/DSC03593.jpg">
         <img src="imagenes/fotos marcenac/DSC03463.jpg">
         <img src="imagenes/fotos marcenac/DSC03410.jpg">
         <img src="imagenes/fotos marcenac/DSC00977.JPG">
         <img src="imagenes/fotos marcenac/DSC00544.jpg">
        </div>
         
   </main>
   <?php
       
    require ("php/Maqueta/footer.php");
       
    ?>
</body>
</html>