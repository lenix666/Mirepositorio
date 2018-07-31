<?php
	$server="localhost";
	$username="root";
	$password="";
	$db='bd_berronini_final';
	$con=mysqli_connect($server,$username,$password)or die("No se ha podido establecer la conexion con la BD");
	$sdb=mysqli_select_db($con,$db)or die("La base de datos no existe");
        /*
        
        $server="sql313.eshost.com.ar";
	$username="eshos_19505391";
	$password="asdf1234";
	$db='eshos_19505391_bd_berronini';        
	$con=mysqli_connect($server,$username,$password)or die("No se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("La base de datos no existe");*/
?>

