<?php
   session_start();
	include '../../recursos/php/conexiones/conexion.php';
	if($_POST['Caso']=="Modificar"){
    include '../update_admin.php';   
    $ing = new UpdateAdmin();
    
    $ing ->ActualizaCliente($_POST['Nombre'],$_POST['Cedula'],$_POST['Ciudad'],$_POST['Direccion'],$_POST['Telefono'],$_POST['Correo'],$_POST['Password']);    
            echo 'El cliente se ha modificado correctamente.';
         //ActualizaCliente($nombre,$cedula,$ciudad,$direccion,$telefono,$correo,$password);
            
            
            
            
            
		
		//echo 'El producto se ha modificado';
	}
        if($_POST['Caso']=="Eliminar"){            
		mysqli_query($con,"delete from usuarios where cedula='".$_POST['Id']."'")or die(mysql_error()); 
                mysqli_query($con,"delete from usuariorol where cedula='".$_POST['Id']."'")or die(mysql_error()); 
                
                $a = $_POST['Id'];
		echo 'El cliente se ha eliminado';
	}
?>