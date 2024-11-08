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
       
       require ("../Maqueta/header2.php");
        
      ?>
      <main>
      <div class="portada" style="background-image:URL('../../imagenes/Portada/slider-a.jpg')">
        <p>Iniciar Sesion</p>
      </div>
    <?php
        include_once("../conexion.php");

        
            echo ' 
            <form action="verificarLogin.php" method="post" style=margin:5%;margin-left:40%>
                            <label>Email de Usuario</label>
                            <input type="text" placeholder="Ingresa tu correo electrónico" name="email">
                            <br>
                            <label>Contraseña</label>
                            <input type="password" placeholder="Ingresa tu contraseña" name="contrasenia" style=margin-left:5.5%>
                            <br>
                        <button type="submit">Iniciar Sesion</button>
                    </form>
                    ';


            echo'<main>';

        require ("../Maqueta/footer2.php");
       
    ?>
     <script src="../../js/js.js" defer></script>
</body>
</html>