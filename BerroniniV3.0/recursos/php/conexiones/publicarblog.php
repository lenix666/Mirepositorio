<?php

include 'conexion.php';
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/recursos/img/publicaciones/';
     
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
     

      mysqli_query($con,"insert into publicaciones(titulo,descripcion,fecha,foto) 
        values ('$_REQUEST[titulo]','$_REQUEST[descripcion]',CURDATE(),'$nombre_img')") or die ("Problemas al publicar".mysqli_error());    
        
        echo"<script type=\"text/javascript\">alert('Publicacion Exitosa'); window.location='../../../blog.php';</script>";

    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}
?>