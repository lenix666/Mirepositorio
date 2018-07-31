<?php
session_start();
    include 'conexion.php'; //conexion a la base de datos

 if (empty($_REQUEST['Email']) == TRUE || empty($_REQUEST['Password']) == TRUE ){
     echo '<span>Campos incompletos.</span>';
 } else {
     
  
$re_ad=mysqli_query($con,"select * from usuarios join usuariorol on usuarios.cedula=usuariorol.cedula where usuarios.correo='".$_POST['Email']."' AND usuarios.password='".$_POST['Password']."' AND usuariorol.rol='administrador'")or die(mysqli_error());
$re_cli=mysqli_query($con,"select * from usuarios join usuariorol on usuarios.cedula=usuariorol.cedula where usuarios.correo='".$_POST['Email']."' AND usuarios.password='".$_POST['Password']."' AND usuariorol.rol='cliente'")or die(mysqli_error());
$v_ad = FALSE;
$v_usu = FALSE;

while ($f=mysqli_fetch_array($re_ad)) {		
                $arreglo_admin[]=array(
                    'Nombre'=>$f['nombre'],   
                    'Cedula'=>$f['cedula'],                    
                    'Correo'=>$f['correo'],
                    'Telefono'=>$f['telefono'],     
                    'Ciudad'=>$f['ciudad'],   
                    'Foto'=>$f['foto'],                   
                    'Direccion'=>$f['direccion']);
                $v_ad = TRUE;
	}
while ($f=mysqli_fetch_array($re_cli)) {
		$arreglo_usu[]=array(
                    'Nombre'=>$f['nombre'],
                    'Cedula'=>$f['cedula'],                    
                    'Correo'=>$f['correo'],         
                    'Telefono'=>$f['telefono'],
                    'Ciudad'=>$f['ciudad'],  
                    'Foto'=>$f['foto'],                  
                    'Direccion'=>$f['direccion']);
                $v_usu =TRUE;
	}
     
if (($v_ad == TRUE) and ($v_usu == TRUE)){    
             
$_SESSION['dual']=$arreglo_admin;

echo '<script>location.href = "recursos/php/conexiones/tipo_sesion.php"</script>';
    
} else {
    

	if(isset($arreglo_admin)){ //determino si existe la variable arreglo administrador
		$_SESSION['administrador']=$arreglo_admin;
                echo '<script>location.href = "index.php"</script>';                
                
	}else{
        if(isset($arreglo_usu)){ //determino si existe la variable arreglo usuario
		$_SESSION['usuario']=$arreglo_usu;                		
                echo '<script>location.href = "index.php"</script>';
	 }
        else{            
            /*echo"<script type=\"text/javascript\">alert('Datos incorrectos'); window.location='../../../index.php';</script>";  */
            echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
        }	
	}
}
}
?>

