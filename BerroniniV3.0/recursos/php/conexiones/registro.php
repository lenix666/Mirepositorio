<?php
include 'conexion.php'; //conexion a la base de datos


//Realizo una consulta comprobando si existe algun usuario con la misma cedula o nick
$existenciaced= mysqli_query($con,"select cedula 
                        from usuarios 
                        where cedula='$_REQUEST[cedula]'") or die ("Problemas en la consulta" . mysqli_error());


$existenciacor= mysqli_query($con,"select correo 
                        from usuarios 
                        where correo='$_REQUEST[correo]'") or die ("Problemas en la consulta" . mysqli_error());

if($f=mysqli_fetch_array($existenciaced)) //obtengo el resultado y comparo
    {        
    echo '<span>Ya existe un usuario registrado con el número de cédula indicado.</span>';    
    }else{
    if ($f= mysqli_fetch_array($existenciacor)){
        echo '<span>Ya existe un usuario registrado con el correo indicado.</span>';    
    }else
    {         
   if (empty($_REQUEST['nombrecompleto']) == TRUE  || empty($_REQUEST['cedula']) == TRUE || empty($_REQUEST['ciudad']) == TRUE|| empty($_REQUEST['direccion']) == TRUE
      ||empty($_REQUEST['telefono']) == TRUE||empty($_REQUEST['correo']) == TRUE||empty($_REQUEST['password']) == TRUE || empty($_REQUEST['cpassword']) == TRUE){
      echo '<span>Todos los campos deben estar llenos.</span>';
      } else {
          /*validar cedula*/        	
	if (VerificarNombre($_REQUEST['nombrecompleto']) == TRUE){
            if (validaCedula($_REQUEST['cedula']) == TRUE){
                if (VerificarCiudad($_REQUEST['ciudad'])==TRUE){                                    
                if (VerificarDireccion($_REQUEST['direccion'])==TRUE){
                    if (VerificarTelefono($_REQUEST['telefono']) == TRUE){
                        if (VerificarrDireccionCorreo($_REQUEST['correo'])== TRUE){
                            if (VerificarContrasena($_REQUEST['password'],$_REQUEST['cpassword'])== TRUE){                                 
                            mysqli_query($con,"insert into usuarios(cedula,nombre,correo,telefono,direccion,password,ciudad,foto) values ('$_REQUEST[cedula]','$_REQUEST[nombrecompleto]','$_REQUEST[correo]','$_REQUEST[telefono]','$_REQUEST[direccion]','$_REQUEST[password]','$_REQUEST[ciudad]','default.png')") or die ("Problemas en al insertar los datos del cliente".mysqli_error());      
                            mysqli_query($con,"insert into usuariorol (cedula,rol) values ('$_REQUEST[cedula]','cliente')")or die ("Problemas en al insertar los datos del cliente".mysqli_error());                                                
                            echo '<span>Usuario registrado correctamente.</span>'; 
                            sleep(1);
                            echo '<script>location.href = "index.php"</script>';
                            }
                        }
                    }      
                }
            }
            
        
            }
            }
        }
    
    }
    
    }    

        
        
    function  VerificarCiudad($ciudad){
        if (empty($ciudad)){
            return FALSE;
        }else{
            return TRUE;
        }
    }




        function VerificarContrasena($password, $cpassword)     {
        if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) 
	{ 
		if ($password == $cpassword){
                    return TRUE;
                }else{
                    echo '<span>Las contraseñas no coinciden.<br></span>';
                }
	}		
	else { 	
                echo '<span>La contraseña es insegura<br>La contraseña debe tener almenos 8 caracteres<br>La contraseña debe tener caracteres especiales</span>';
                return FALSE;
                
	}
        }
          
          
          
       
      
        
     function VerificarNombre($dir)
    {
        if (strlen($dir) > 5){
            
            return TRUE;        
        }else{
            echo '<span>Nombre demasiado pequeño.<br></span>';          
            return FALSE;
        }
    }  
                    
    
    function validaCedula($strCedula){
        $total_caracteres=strlen($strCedula);
	if($total_caracteres==10)
	{
		$nro_region=substr($strCedula, 0,2);
		if($nro_region>=1 && $nro_region<=24)
		{
			$ult_digito=substr($strCedula, -1,1);
		
		
			$valor2=substr($strCedula, 1, 1);
			$valor4=substr($strCedula, 3, 1);
			$valor6=substr($strCedula, 5, 1);
			$valor8=substr($strCedula, 7, 1);
			$suma_pares=($valor2 + $valor4 + $valor6 + $valor8);
		
		
			$valor1=substr($strCedula, 0, 1);
			$valor1=($valor1 * 2);
			if($valor1>9)
			{ 
				$valor1=($valor1 - 9); 
			}
			else
			{ 
			}
			$valor3=substr($strCedula, 2, 1);
			$valor3=($valor3 * 2);
			if($valor3>9)
			{ 
				$valor3=($valor3 - 9); 
			}
			else
			{ 
			}
			$valor5=substr($strCedula, 4, 1);
			$valor5=($valor5 * 2);
			if($valor5>9)
			{ 
				$valor5=($valor5 - 9); 
			}
			else
			{ 
			}
			$valor7=substr($strCedula, 6, 1);
			$valor7=($valor7 * 2);
			if($valor7>9)
			{ 
				$valor7=($valor7 - 9); 
			}
			else
			{ 
			}
			$valor9=substr($strCedula, 8, 1);
			$valor9=($valor9 * 2);
			if($valor9>9)
			{ 
				$valor9=($valor9 - 9); 
			}
			else
			{ 
			}

			$suma_impares=($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
			$suma=($suma_pares + $suma_impares);
			$dis=substr($suma, 0,1);
			$dis=(($dis + 1)* 10);
			$digito=($dis - $suma);
			if($digito==10)
			{ 
				$digito='0'; 
			}
			else
			{ 
			}
			if ($digito==$ult_digito)
			{
                            return TRUE;
			}
			else
			{
				echo '<span>Cedula Incorrecta<br></span>';
                                return FALSE;
			}
		}
		else
		{
			echo '<span>Este Nro de Cedula no corresponde a ninguna provincia del ecuador<br></span>';	
                        return FALSE;
		}
	}
	else
	{
	echo '<span>Cedula Incorrecta<br></span>';
	}
    }
 
    function VerificarDireccion($dir)
    {
        if (strlen($dir) > 4){
            
            return TRUE;        
        }else{
            echo '<span>Al parecer la dirección es incorrecta.<br></span>';          
            return FALSE;
        }
    }  
    
    
    function VerificarTelefono($dir)
    {
        if (strlen($dir) == 10 || strlen($dir) == 9){
            
            return TRUE;        
        }else{
            echo '<span>El número de teléfono debe ser de 9 o 10 dígitos.<br></span>';          
            return FALSE;
        }
    }  
    
    
    function VerificarrDireccionCorreo($direccion)
    {
       $Sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
       if(preg_match($Sintaxis,$direccion)){           
          return true;
       }
          
       else{
           echo '<span>Correo eletrónico incorrecto.<br></span>';   
         return false;
    }}

?>
