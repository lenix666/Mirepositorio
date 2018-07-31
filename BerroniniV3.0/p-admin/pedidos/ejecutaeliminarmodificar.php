<?php
   session_start();
	include '../../recursos/php/conexiones/conexion.php';
	if($_POST['Caso']=="Modificar"){
	
		mysqli_query($con,"update pedidos 
		             set pedidos.estado='".$_POST['Estado']."'
					 where idpedido=".$_POST['Id'])or die(mysql_error());
		
		echo 'El producto se ha modificado';
	}
   if($_POST['Caso']=="Eliminar"){
		mysqli_query($con,"delete from pedidos where idpedido=".$_POST['Id']);
		echo 'El producto se ha eliminado';
	}
?>