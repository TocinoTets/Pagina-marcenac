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
       
        require ("php/header.php")
        
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
                        <img src="imagenes/Portada/graduation-cap-128.png">
                      </div>
                      
                      <div class="texto">
                        <h1><b>DIPLOMATURA</b></h1>
                        <a href="https://alfredomarcenac.org/web/diplomatura/"><b>AMPLIAR ></b></a>
                      </div>
                      
                    </div>

                    <div class="caja">

                      <div class="icono">
                        <img src="imagenes/Portada/bank-3-100.png">
                      </div>

                      <div class="texto">
                        <h1><b>CÁTEDRA ABIERTA</b></h1>
                        <a href=""><b>AMPLIAR ></b></a>
                      </div>
                    </div>
                  </div>
              </div>
              <br>
              
              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
              </div>
        </div>

        <div class="presentacion">
          <div class="caja">
            <h1>Presentación</h1>

            <h2><b>Quiénes somos y qué hacemos</b></h2>
            <p>
              En octubre de 2006 un conjunto de ciudadanos de diferentes edades de la ciudad de Necochea y Quequén conformaron una Asociación Civil, cuyo lema es “Prevenir para no lamentar”. 
              La Asociación civil lleva el nombre de “Alfredo MARCENAC”, en homenaje al joven que fue asesinado con un arma de fuego el 6 de julio de ese mismo año, mientras paseaba con unos amigos por la calle Cabildo, en Capital Federal. 
              La asociación integra también la Red Argentina para el Desarme, (una red de asociaciones civiles a nivel nacional).</p>
            </div>
        </div>

        <div class="noticias">
            <h1>Noticias</h1>
            <div class="noticia">
              <img src="" alt="">
              <p></p>
            </div>
            <div class="noticia">
            <img src="" alt="">
              <p></p>
            </div>
            <div class="noticia">
            <img src="" alt="">
              <p></p>
            </div>
            <div class="noticia">
            <img src="" alt="">
              <p></p>
            </div>
        </div>

        <?php
       
        require ("php/footer.php")
        
        ?>
    </main>
</body>
</html>