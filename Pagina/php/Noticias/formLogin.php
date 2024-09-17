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
        include_once("../conexion.php");

        
            echo '  <main style="height:60vh; align-content:center;">
            <form action="verificarLogin.php" method="post">
                            <label>Email de Usuario</label>
                            <input type="text" placeholder="Ingresa tu correo electrónico" name="email">
                            <label>Contraseña</label>
                            <input type="password" placeholder="Ingresa tu contraseña" name="contrasenia">
                        <button type="submit">Iniciar Sesion</button>
                    </form>
                    </main>';




        require ("../Maqueta/footer.php");
       
    ?>
     <script src="../../js/js.js" defer></script>
</body>
</html>