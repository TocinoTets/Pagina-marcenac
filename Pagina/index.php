<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <script src="js/js.js" defer></script>
    <title>Alfredo Marcenac - Asosiación Civil</title>
</head>
<body> 
    <main>

      <?php
       
       require ("php/Maqueta/header.php");
        
        ?>
        
        <div class="Portada">
              <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-a.jpg" style="width:100%">
                  <div class="texto-anim fadeIn">PREVENIR</div>
                  <div class="texto-anim2 fadeIn">PARA NO</div>
                  <div class="texto-anim3 fadeIn">LAMENTAR</div>
                </div>
                <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-b.jpg" style="width:100%">
                  <div class="texto-anim4 fadeIn">COMPROMISO COLECTIVO</div>
                  <div class="texto-anim5 fadeIn">Y</div>
                  <div class="texto-anim6 fadeIn">RESPONSABILIDAD</div>
                </div>
              
                <div class="mySlides fade">
                  <img src="imagenes/Portada/slider-c.jpg" style="width:100%">
                  <div class="texto-anim7 fadeIn">CUIDADO DE LA</div>
                  <div class="texto-anim8 fadeIn">VIDA</div>
                </div>

                <div class="mySlides fade">
                  <img src="imagenes/Portada/SLIDER.jpg" style="width:100%">
                </div>

                
                <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
                <a class="next" onclick="plusDivs(1)">&#10095;</a>

                  <div class="enlaces">      

                    <div class="caja">

                      <div class="icono">
                        <img src="imagenes/Portada/bank-3-100.png">
                      </div>

                      <div class="texto">
                        <h1><b>DIPLOMATURA</b></h1>
                        <a href=""><b>AMPLIAR ></b></a>
                      </div>

                    </div>   

                  </div>
              </div>
        </div>

        <div class="gap"></div>

        <div class="presentacion">
              <h1><b>Quiénes somos y qué hacemos</b></h1>
              <p>Somos una red de asociaciones civiles a nivel nacional cuyo objetivo es lograr el desarme de la sociedad y lograr la solución de conflictos por la paz.</p>
              <a href="presentacion.php"><b>VER MAS ></b></a>
        </div>
        <div class="gap"></div>

        <div class="noticias">
            <h1>Noticias</h1>
            
        </div>

        <?php
       
       require ("php/Maqueta/footer.php");
        
        ?>
    </main>
</body>
</html>