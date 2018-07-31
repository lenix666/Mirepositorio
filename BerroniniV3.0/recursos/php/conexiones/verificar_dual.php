<?php        
    ini_set("session.cookie_lifetime","7200");
    ini_set("session.gc_maxlifetime","7200");
    session_start(); //Inicia una nueva sesión o reanuda la existente 
    
$arreglo_admin = $_SESSION['dual'];
     if ($_REQUEST['userol']=="cliente"){        
        $_SESSION['usuario']=$arreglo_admin;
        unset($_SESSION['dual']);
        echo"<script type=\"text/javascript\">alert('Entraste como cliente'); window.location='../../../index.php';</script>";  
        //header("Location: ../../../index.php");            
    }
    
    if ($_REQUEST['userol']=="administrador"){       
         $_SESSION['administrador']=$arreglo_admin;
         unset($_SESSION['dual']);
         echo"<script type=\"text/javascript\">alert('Entraste como Administrador'); window.location='../../../index.php';</script>";  
         //header("Location: ../../../index.php");            
    }
 
