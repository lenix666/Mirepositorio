<?php
    session_start();
    include '../../recursos/php/conexiones/conexion.php';
    include '../update_admin.php';
    
    $ing = new UpdateAdmin();
    
                    

 if (empty($_POST['file'])){
            $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        $imagen="";
        $random=rand(1,999999);
            if ((($_FILES["file"]["type"] == "image/gif")
                    || ($_FILES["file"]["type"] == "image/jpeg")
                    || ($_FILES["file"]["type"] == "image/jpg")
                    || ($_FILES["file"]["type"] == "image/pjpeg")
                    || ($_FILES["file"]["type"] == "image/x-png")
                    || ($_FILES["file"]["type"] == "image/png"))){
                    //Verificamos que sea una imagen
            if ($_FILES["file"]["error"] > 0){
                    //verificamos que venga algo en el input file
            echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
        }else{
            //subimos la imagen

            $imagen= $random.'_'.$_FILES["file"]["name"];
            if(file_exists("../recursos/img/usuario/".$random.'_'.$_FILES["file"]["name"])){
                    echo $_FILES["file"]["name"] . " Ya existe. ";
            }else{
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                    "../../recursos/img/productos/" .$random.'_'.$_FILES["file"]["name"]);
                    $ing ->IngresoProd($_REQUEST['productoid'],$_REQUEST['nombre'],$_REQUEST['descripcion'],$_REQUEST['precio'],$_REQUEST['capacidad'],$_REQUEST['tipo'],$imagen);
                                                                                            
            }
        }
      }else{
        header('Location:' . getenv('HTTP_REFERER')); 
      }
            
      }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    
    
    
    
    
    //$ing ->IngresoProd('1','2','3','4','5','6','7');
?>

