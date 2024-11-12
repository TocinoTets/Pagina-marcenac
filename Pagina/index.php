<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estilo.css">

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
       require ("php/Maqueta/header.php");
        
        ?>
        <div class="Portada">
              <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-a.jpg">
                  <div class="texto-anim fadeIn">PREVENIR</div>
                  <div class="texto-anim2 fadeIn">PARA NO</div>
                  <div class="texto-anim3 fadeIn">LAMENTAR</div>
                </div>
                <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-b.jpg">
                  <div class="texto-anim4 fadeIn">COMPROMISO COLECTIVO</div>
                  <div class="texto-anim5 fadeIn">Y</div>
                  <div class="texto-anim6 fadeIn">RESPONSABILIDAD</div>
                </div>
              
                <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-c.jpg">
                  <div class="texto-anim7 fadeIn">CUIDADO DE LA</div>
                  <div class="texto-anim8 fadeIn">VIDA</div>
                </div>

                <div class="mySlides fade">
                  <img src="imagenes/Portada/SLIDER.jpg">
                </div>

                
                <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
                <a class="next" onclick="plusDivs(1)">&#10095;</a>

                  <div class="enlaces">      

                    <div class="caja" >
                     
                      <div class="icono">
                        <img src="imagenes/Portada/bank-3-100.png">
                      </div>

                      <div class="texto">
                        <h1><b>DIPLOMATURA</b></h1>
                        <a href="sitios/diplomatura.php"><b>AMPLIAR ></b></a>
                      </div>

                    </div>   

                  </div>
              </div>
        </div>

        
        <div class="gap"></div>

        <div class="presentacion">
              <h1><b>Quiénes somos y qué hacemos</b></h1>
              <p>Somos una organizacion civil cuyo propósito es concientizar sobre la problematica que ocasionan las armas de fuego en la sociedad y promover la solución de conflictos por medios pacificos.</p>
              <a href="Sitios/presentacion.php"><b>PRESENTACIÓN</b></a>
        </div>
        <div class="gapLinea"></div>

          <h1 style="text-align:center;">Ultimas noticias <br>
          <a href="noticias.php">>Ver Mas<</a></h1>

        <div class="noticias">
            
            <?php

                $i = 0;
                require("php/conexion.php");
                
                $sql = "SELECT * FROM noticias ORDER BY idNoticia DESC";

                $respuesta = mysqli_query($conexion,$sql);

                if (mysqli_num_rows($respuesta)>0)
                {
                    
                    for($i=0;$i<3;$i++)
                    {
                        $filas = mysqli_fetch_assoc($respuesta);
                        echo'<div class="noticia">
                            <div id="tituloNoticia"><h1>'.$filas['tituloNoticia'].'</h1></div>
                            <div class="contenidoNoticia">
                              <div id="descripcionNoticia"><p>'.$filas['descripcionNoticia'].'</p></div>
                              <div id="imagenNoticia"><img src="'.$filas['direccionImagenIndex'].'"></div>
                            </div>
                          </div>';
                    }
                  
                }
            ?>
        </div>
        
        <?php
       
       require ("php/Maqueta/footer.php");
        
        ?>
        <button onclick="menu()">
    </main>
    <script src="js/js.js" defer></script>
    <script src="js/js2.js" defer></script>
</body>
</html>