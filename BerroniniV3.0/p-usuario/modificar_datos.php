<?php
session_start();
    include '../recursos/php/conexiones/conexion.php';
    include 'update_clie.php';
    
    if(empty($_POST['nombre']) ||  empty($_POST['ciudad']) ||  empty($_POST['direccion'])
        ||  empty($_POST['telefono']) || empty($_POST['correo'])  ){
       
		echo"<script type=\"text/javascript\">alert('Para poder modificar, todos los campos deben estar llenos'); header('Location:' . getenv('HTTP_REFERER'));</script>";          
    }else{
            $t = new UpdateCli();
            $t -> ActuDatos($_REQUEST['nombre'],$_REQUEST['ciudad'],$_REQUEST['direccion'],$_REQUEST['telefono'],$_REQUEST['correo']);            
            $t ->ActuSesion();
            echo"<script type=\"text/javascript\">alert('Datos actualizados correctamente.'); window.location='../p_cliente.php';</script>";            
        
//echo"<script type=\"text/javascript\">alert('Las contraseñas no coinciden. !NO SE ACTUALIZARÁ LA CONTRASEÑA'); window.location='';</script>";          
//        header('Location:' . getenv('HTTP_REFERER'));  
        
    }
    
    