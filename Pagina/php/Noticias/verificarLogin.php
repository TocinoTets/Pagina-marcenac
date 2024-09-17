<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

                include("../conexion.php");
                $email = $_POST['email'];
                $contrasenia = $_POST['contrasenia'];
                $contra_encriptada = md5($contrasenia);

                $sql = "SELECT * FROM usuario WHERE email='".$email."'"; 

                    $resultado = mysqli_query($conexion, $sql);
                    $datosUsuario = mysqli_fetch_assoc($resultado);

                if ($datosUsuario != NULL) {
                    if ($contra_encriptada == $datosUsuario['contrasenia']) {
                        session_start();
                        $_SESSION['idUsuario'] = $datosUsuario['idUsuario'];
                        $_SESSION['tipoUsuario'] = $datosUsuario['tipoUsuario'];
                        header ("Location: cargarNoticia.php");
                    } else {
                        echo "contaseña incorrecta";
                        echo '<button><a href="formLogin.php">Reintentar</a></button>';
                    }
                }else{
                    echo'No hay un usuario con este Email';
                    echo'<button><a href="formLogin.php">Reintentar</a></button>';
                }
        ?>
</body>
</html>