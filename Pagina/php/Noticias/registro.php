<?php

                include("../conexion.php");
                $email = $_POST['email'];
                $contrasenia = $_POST['contrasenia'];
                $contra_encriptada = md5($contrasenia);

                $sql = "INSERT INTO usuario (email,contrasenia,tipoUsuario) VALUES ('".$email."','".$contra_encriptada."',1)"; 
                echo $sql;

                $resultado = mysqli_query($conexion, $sql);
                
                header ("Location: cargarNoticia.php");
        ?>