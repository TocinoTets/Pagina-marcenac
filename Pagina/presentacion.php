<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/portada.css">
    <link rel="stylesheet" href="estilos/maqueta.css">
    <link rel="stylesheet" href="estilos/estiloPresentacion.css">
    <script src="js/js.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php
        require ("php/Maqueta/header.php");
    ?>

    <main>
        <div class="portada" style="background-image:URL('imagenes/Portada/slider-a.jpg')">
            <p>Presentación</p>
        </div>

        <div class="gap">
            <p><a href="index.php">Home</a></p> <p>/presentacion</p>
        </div>

        <div class="presentacion">
            <div class="side">
                <p>La vida humana es un acto grandioso y potente de la existencia que merece ser cuidado y protegido por todos. La violencia es un acto terrible e inhumano que debe ser rechazado por todos. <br><br>
                Entendemos que la violencia y la paz son comportamientos posibles de los seres humanos. Sólo debemos decidir en qué camino queremos estar.<br><br>
                Por amor y en memoria de Alfredo y de todos aquellos cuyas  vidas fueron  arrasadas por la violencia, hemos decidido poner nuestro trabajo y nuestro esfuerzo al servicio de la paz.</p>
            </div>

            <div class="info">
                <h2>Quiénes somos y qué hacemos</h2>

                <p>En octubre de 2006 un conjunto de ciudadanos de diferentes edades de la ciudad de Necochea y Quequén conformaron una Asociación Civil, cuyo lema es “Prevenir para no lamentar”. La Asociación civil lleva el nombre de “Alfredo MARCENAC”, en homenaje al joven que fue asesinado con un arma de fuego el 6 de julio de ese mismo año, mientras paseaba con unos amigos por la calle Cabildo, en Capital Federal. La asociación integra también la Red Argentina para el Desarme, (una red de asociaciones civiles a nivel nacional).</p><br>

                <h2>Formas de organización de la institución</h2>

                <p>La Asociación está conformada por una Comisión Directiva con 14 miembros, un Equipo Docente, integrado por 15 personas y los voluntarios, cuya cantidad varía, según los años y las tareas que la ACAM planifica como actividades anuales.  La organización financia sus actividades con la cuota mensual de los asociados (alrededor de 100) y con donaciones en efectivo y en materiales que recibe de particulares y empresas locales.<br><br>

                La Asociación ha enunciado como su objetivo más importante, la <b>“promoción de acciones colectivas tendientes a la construcción de una cultura pacífica y segura”.</b> Entendemos que para lograr esta meta es necesario romper con las diferentes formas de violencia que están naturalizadas. Y asumir que el tema de la seguridad es una cuestión colectiva,  indefectiblemente asociada a la defensa y protección de la VIDA y de los Derechos Humanos.</p>
            </div>
        </div>
        
        <div class="gapInfo"><h1>El Mural</h1></div>

        <div class="Mural">
            
            <div class="imagenMural">
                <img src="imagenes/imagenesMural/mural.jpg"></a>
            </div>
            <div class="informacionMural">
                <h1>En homenaje a ALFREDO MARCENAC</h1>
                <div id="gapInfo"></div>
                <p>Representa los sentimientos de un grupo de personas, en este caso nuestra familia, frente a un hecho violento, terrible e inadmisible que  arrasó con la vida de nuestro hijo. Sin embargo no es una imagen de un hecho individual, sino de un hecho social. Porque todo acto de violencia de un ser humano contra otro ser humano NUNCA ES INDIVIDUAL, aunque sólo lo sufran sólo algunos. Por lo tanto el mural es la marca de una INJUSTICIA TERRIBLE como es la muerte de una persona, en este caso de Alfredo; es la marca que tiene que quedar en la sociedad porque un ser especial, único e irrepetible fue privado de su vida y  esta sociedad fue privada también del bien que él podría haber hecho.
                Y por último es la materialización del dolor que sentimos particularmente nosotros porque conocimos y amamos a Alfredo, pero que sienten también todas las familias que en este país sufrimos violencia porque el Estado no se hace cargo de cumplir con las responsabilidades que tiene que cumplir, en este caso hacerse cargo del CONTROL de las armas de fuego.
                Por eso, este mural tiene un significado particular para nosotros, porque ha sido reconstruido varias veces y en diferentes lugares por jóvenes que se han solidarizado con este reclamo por una sociedad más pacífica y sin armas.
                La imagen rescata características de Alfredo: su serenidad, su alegría de vivir y su sonrisa siempre franca y abierta y su amor por la natación y el mar. Era una persona tranquila y pacífica, muy querida en los grupos de los que formaba parte. Por eso sus manos se convierten en palomas, pues nada que viniera de él era agresivo.
                Las frases pretenden expresar el dolor que sentimos por su ausencia y el dolor que produce la violencia en las personas. Si bien en el momento que pintamos este mural en el lugar que mataron a Alfredo pretendimos que nadie olvidara lo que había sucedido, este mural se convirtió en un icono para nuestra Asociación que guía las acciones que hacemos para lograr una sociedad pacífica y sin armas.</p>
                
                <a href="mural.php"><b>Ver su creación >></a>
            </div>
        </div>

        <div class="gapInfo"></div>

    </main>

    <?php
        require ("php/Maqueta/footer.php");
    ?>
</body>
</html>