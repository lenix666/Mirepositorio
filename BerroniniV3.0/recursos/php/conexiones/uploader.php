<?php
    ini_set("session.cookie_lifetime","7200");
    ini_set("session.gc_maxlifetime","7200");
    session_start(); //Inicia una nueva sesión o reanuda la existente     
            
//  print_r( $_SESSION );  
  




    if (isset($_POST['subirBtn'])){
        $archivo = $_FILES['imagen']['tmp_name'];
        $destino = "../../../recursos/img/usuarios/".$_FILES['imagen']['name'];
        move_uploaded_file($archivo, $destino);
        include ("conexion.php");
        //mysqli_query($con,"insert into usuarios (foto) values ('$destino') where usuarios.cedula=$cedulaidentidad");
        
    }
    

?>