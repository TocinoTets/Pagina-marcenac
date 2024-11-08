<?php
include("../conexion.php");

$idNoticia = $_POST['idNoticia'];

$sql = "DELETE FROM noticias WHERE idNoticia='$idNoticia'";

$respuesta = mysqli_query($conexion, $sql);


if ($respuesta) {
    header("Location: ../../index.php");
    } else {
        echo "Error al eliminar la noticia";
    }
?>