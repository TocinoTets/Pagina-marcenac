<?php
require ("../php/conexion.php");
session_start();
if (isset($_SESSION)){
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];

  $carpetaDestino = "../imagenes/imagenesNoticias";
  $carpetaDestinoIndex = "imagenes/imagenesNoticias";
  $id= $titulo; //el id de la noticia sea el id de la imagen
  $archivo = $carpetaDestino . basename($_FILES["archivoAsubir"]["name"]); //recibimos el archivo completo con nombre y extension para concatenarlo con la carpeta destino
  $subio = 1;
  $tipoDeImagen = strtolower(pathinfo($archivo,PATHINFO_EXTENSION)); //devuelve el tipo de extension del archivo

  //var_dump($carpetaDestino.$id.".".$tipoDeImagen); //ver la carpeta destino, el nuevo nombre y la extension del archivo.

  // Chequea si el archivo es una imagen
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["archivoAsubir"]["tmp_name"]);
    if($check !== false) {
      $subio = 1;
    } else {
      echo "El archivo no es una imagen.";
      $subio = 0;
    }
  }

  // Chequea si el archivo existe
  if (file_exists($archivo)) {
    echo "El archivo \"". htmlspecialchars( basename( $_FILES["archivoAsubir"]["name"]))."\"  ya existe";
    $subio = 0;
  }

  // si subio esta en 0, los criterios de la imagen no ocurrieron
  if ($subio == 0) {
    echo ", no fue subido.";
  // si todo esta ok, trata de subir el archivo
  } else {
    if (move_uploaded_file($_FILES["archivoAsubir"]["tmp_name"], $carpetaDestino."/".$id.".".$tipoDeImagen)) { //movemos el archivo desde memoria a una carpeta destino, reescribimos su nombre, le agregamos "." y su extension al final
      echo "El archivo ". htmlspecialchars( basename( $_FILES["archivoAsubir"]["name"])). " fue subido como:  \"".$id.".".$tipoDeImagen."\""; //mensaje de subida con el nuevo nombre
    } else {
      echo "Hubo un error subiendo tu archivo.";
    }

    if (move_uploaded_file($_FILES["archivoAsubir"]["tmp_name"], $carpetaDestinoIndex."/".$id.".".$tipoDeImagen)) { //movemos el archivo desde memoria a una carpeta destino, reescribimos su nombre, le agregamos "." y su extension al final
      echo "El archivo ". htmlspecialchars( basename( $_FILES["archivoAsubir"]["name"])). " fue subido como:  \"".$id.".".$tipoDeImagen."\""; //mensaje de subida con el nuevo nombre
    } else {
      echo "Hubo un error subiendo tu archivo.";
    }
  }
  //si quisieramos guardar la url de la imagen para subirla a una BD, deberiamos usar $carpetaDestino.$id."."$tipoDeImagen , todas esta linea como tipo STRING


  $sql = "INSERT INTO noticias (tituloNoticia,descripcionNoticia,direccionImagen,direccionImagenIndex,Estado) VALUES ('".$titulo."','".$descripcion."','".$carpetaDestino."/".$id.".".$tipoDeImagen."','".$carpetaDestinoIndex."/".$id.".".$tipoDeImagen."',1)"; 

  $respuesta = mysqli_query($conexion,$sql);

  var_dump($respuesta);



  header("Location: noticias.php");
} else {
  header("Location: noticias.php");

}

?>