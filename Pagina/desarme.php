<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estiloDesarme.css">
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

    <div class="portada" style="background-image:URL('imagenes/Portada/slider-a.jpg')"><p>Desarme</p></div>
     
    <div class="gap">
        <p><a href="index.php">Home</a></p> <p>/desarme</p>
    </div>

    <div class="desarme">
    
       
        
        <div class="informacion">
            <div class="info">
                <h2>Concientizacion para el desarme</h2>
                <p>La Asociación integra desde 2007 la (hipervinculo)Red Argentina para el Desarme, (red de organizaciones de la sociedad civil con 15 años de experiencia en la prevención de la violencia armada). 
                A partir de la puesta en marcha del Programa Nacional de entrega de Armas de fuego (Ley 26.216/07), la organización asumió un rol muy activo en las tareas vinculadas al DESARME de la sociedad civil:
                </p>
            </div>

            <div class="side">
                <ul>
                    <li>
                        <p>Acciones de concientización sobre Desarme Civil en 35 ciudades.</p>
                    </li>
                    <li>
                        <p>Expositores en el 1º Encuentro de países miembros de las UNASUR para la prevención y reducción de la violencia armada(10 /12/ 2010).</p>
                    </li>
                    <li>
                        <p>Expositores en el Seminario Regional “Desarme de la Sociedad Civil: hacia una estrategia integral para la región”, (mayo 2012) organizado por el Ministerio de Justicia y Derechos Humanos de la Nación.</p>
                    </li>
                    <li>
                        <p>Participación en la elaboración del proyecto de ley de “creación de una agencia nacional de materiales controlados” y en la discusión con los diferentes bloques políticos de las cámaras legislativas nacionales, que se aprobó en diciembre de 2015 (Ley 27.192).</p>
                    </li>
                    <li>
                        <p>Veedora en las destrucciones de armas que se realizan en el país, en el marco del Programa de entrega voluntaria de Armas de fuego. </p>
                    </li>
                    <li>
                        <p>Impulsora del Programa “Municipio sin armas”, en las ciudades de Necochea, Santa Rosa (La Pampa) y Mar del Plata.</p>
                    </li>
                </ul>
            </div>
            <div class="imagen">
            <img src="imagenes/fotos marcenac/11115234_10204253464278901_2864683010478981681_n.jpg">
            </div>
        </div>
    </div>
    </main>
   <?php
       
       require ("php/Maqueta/footer.php");
       
       ?>
</body>
</html>