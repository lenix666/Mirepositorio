<?php

include 'conexion.php'; //conexion a la base de datos

	$codigo=$_REQUEST['codigo'];
	$nombre=$_REQUEST['nombre'];
	$descripcion=$_REQUEST['descripcion'];
	$tipo=$_REQUEST['tipoprod'];
	$precio=$_REQUEST['precio'];
	$capacidad=$_REQUEST['capacidad'];
	$foto=$_REQUEST['foto'];

	$existencia= mysqli_query($con,"select idproducto 
                        from productos 
                        where idproducto='$codigo'") or die ("Problemas en la consulta" . mysqli_error());

	if($f=mysqli_fetch_array($existencia)) //obtengo el resultado y comparo
    {
    //header("Location: ./crearcuenta.php?error=Ya existe un usuario con esos datos");
    echo"<script type=\"text/javascript\">alert('Ya existe un producto con este codigo'); window.location='../../../index.php';</script>";  
    }
else
    {         
    mysqli_query($con,"insert into productos(idproducto,nombre,descripcion,tipo,precio,capacidad,foto) values ('$codigo','$nombre','$descripcion','$tipo','$precio','$capacidad','$foto')") or die ("Problemas en al insertar el nuevo producto".mysqli_error());
	
    echo"<script type=\"text/javascript\">alert('Producto Ingresado Correctamente'); window.location='../../../p_admin.php';</script>";  
	}

?>