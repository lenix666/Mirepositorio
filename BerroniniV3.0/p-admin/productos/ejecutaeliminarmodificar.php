<?php
   session_start();
	include '../../recursos/php/conexiones/conexion.php';
	if($_POST['Caso']=="Modificar"){
    include '../update_admin.php';   
    $ing = new UpdateAdmin();
    
    $ing ->ActualizaProd($_POST['Idproducto'],$_POST['Nombre'],$_POST['Descripcion'],$_POST['Precio'],$_POST['Tipo']);    
            echo 'El producto se ha modificado correctamente.';
         
            
            
            
            
            
		
		//echo 'El producto se ha modificado';
	}
        if($_POST['Caso']=="Eliminar"){            
		mysqli_query($con,"delete from productos where idproducto='".$_POST['Id']."'")or die(mysql_error()); 
                $a = $_POST['Id'];
		echo 'El producto se ha eliminado';
	}
?>