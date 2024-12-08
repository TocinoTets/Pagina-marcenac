<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/portada.css">
    <link rel="stylesheet" href="../../estilos/maqueta.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap-grid.css">
    <title>Cargar Noticias</title>
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
        include_once("../conexion.php");

        
            echo ' 
            <div class="card" style="margin: 3%; width: 18rem;">
                <form action="verificarLogin.php" method="post" >
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Email del usuario: </label>
                            <input type="text" placeholder="Ingresa tu correo electrónico" name="email">
                        </div>
                        <div class="mb-3">
                            <label>Contraseña: </label>
                            <input type="password" placeholder="Ingresa tu contraseña" name="contrasenia" >
                        </div>
                            <button type="submit" class="btn btn-warning">Iniciar Sesion</button>
                    </div>
                </form>
            </div>
            
                    ';


            echo'<main>';

        require ("../Maqueta/footerNoticias.php");
       
    ?>
    
     <script src="../../js/js.js" defer></script>
</body>
</html>