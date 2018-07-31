<?php
    
    class UpdateAdmin{
        function UpdatePic($nueva){            
            include '../recursos/php/conexiones/conexion.php';
            $cliente = $_SESSION['administrador'];            
            $cedula = $cliente[0]['Cedula'];                               
            $sql = mysqli_query($con, "update usuarios set foto='".$nueva."' where usuarios.cedula='".$cedula."'");
        }
        function ActuSesion(){
            include '../recursos/php/conexiones/conexion.php';
            if (isset($_SESSION['administrador'])){
                $ss= $_SESSION['administrador'];
                $ced= $ss[0]['Cedula'];                  
                unset($_SESSION['administrador']);                
                $contra=mysqli_query($con,"select * from usuarios where usuarios.cedula='".$ced."'")or die(mysqli_error());                                                                              
                while ($f=mysqli_fetch_array($contra)) {
		$arreglo_usu[]=array(
                    'Nombre'=>$f['nombre'],
                    'Cedula'=>$f['cedula'],                    
                    'Correo'=>$f['correo'],         
                    'Telefono'=>$f['telefono'],
                    'Ciudad'=>$f['ciudad'],  
                    'Foto'=>$f['foto'],                  
                    'Direccion'=>$f['direccion']);                
                }
               if(isset($arreglo_usu)){ //determino si  existe la variable arreglo usuario
		$_SESSION['administrador']=$arreglo_usu;                		                
                }
            }
            
        }        
        function ContraActual($contt){
            include '../recursos/php/conexiones/conexion.php';
            $ss= $_SESSION['administrador'];
                $ced= $ss[0]['Cedula'];                                                
                $contra=mysqli_query($con,"select password from usuarios where usuarios.cedula='".$ced."'")or die(mysqli_error());                                                                                             
                $cc = mysqli_fetch_assoc($contra); 
                $er = $cc['password'];
                print_r($er);
                echo "$contt";
                //echo "$cc";
                if ($er == $contt){                    
                    return TRUE;
                    
                } else {                    
                    return FALSE;
                }
        }                    
        function UpdatePass($pass){
            include '../recursos/php/conexiones/conexion.php';
            $cliente = $_SESSION['administrador'];            
            $cedula = $cliente[0]['Cedula']; 
            $sql = mysqli_query($con, "update usuarios set password='".$pass."' where usuarios.cedula='".$cedula."'");
        }    
        function ActuDatos($nombre,$ciudad,$direccion,$telefono,$email){
            include '../recursos/php/conexiones/conexion.php';
            $cliente = $_SESSION['administrador'];            
            $cedula = $cliente[0]['Cedula']; 
            $sql = mysqli_query($con, "update usuarios set nombre='".$nombre."',    
                ciudad='".$ciudad."',direccion='".$direccion."',telefono='".$telefono."',
                    correo='".$email."' where usuarios.cedula='".$cedula."'");
       
        }
        function IngresoProd($idprod,$nombre,$descripcion,$precio,$capacidadprod,$tipo,$foto){
            include '../../recursos/php/conexiones/conexion.php';
            $existenciaprod= mysqli_query($con,"select idproducto 
                        from productos 
                        where idproducto='".$idprod."'") or die ("Problemas en la consulta" . mysqli_error());
            if($f=mysqli_fetch_array($existenciaprod)) //obtengo el resultado y comparo
            {        
                echo"<script type=\"text/javascript\">alert('Ya existe un producto con el mismo ID.'); window.location='../../p_admin.php';</script>";                            
            }else{                
                mysqli_query($con, "insert into productos (idproducto,nombre,descripcion,precio,capacidadprod,tipo,foto) 
                values ('$idprod','$nombre','$descripcion','$precio','$capacidadprod','$tipo','$foto')   ")or die ("Problemas en al insertar los datos del cliente".mysqli_error());
                echo"<script type=\"text/javascript\">alert('Producto ingresado correctamente.'); window.location='../../p_admin.php';</script>";                            
            }

        }
        
        
        function ActualizaProd($idprod,$nombre,$descripcion,$precio,$tipo){
            include '../../recursos/php/conexiones/conexion.php';            
            $a = mysqli_query($con, "update productos set nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',tipo='".$tipo."'   where productos.idproducto='".$idprod."'");
                                                   
        }
        
        function ActualizaCliente($nombre,$cedula,$ciudad,$direccion,$telefono,$correo,$password1){
            include '../../recursos/php/conexiones/conexion.php';  
            
                $a = mysqli_query($con, "update usuarios set nombre='".$nombre."',ciudad='".$ciudad."',direccion='".$direccion."',telefono='".$telefono."',correo='".$correo."',password='".$password1."'   where usuarios.cedula='".$cedula."'");
            
            
            
                                                   
        }
        
        function RegistraCliente($nombre,$cedula,$ciudad,$direccion,$telefono,$correo,$password1){
            include '../../recursos/php/conexiones/conexion.php';            
            echo "$password1 $correo";
         $existenciaced= mysqli_query($con,"select cedula 
                        from usuarios 
                        where cedula='$cedula'") or die ("Problemas en la consulta" . mysqli_error());
                        $existenciacor= mysqli_query($con,"select correo 
                                                from usuarios 
                                                where correo='$correo'") or die ("Problemas en la consulta" . mysqli_error());

                        if($f=mysqli_fetch_array($existenciaced)) //obtengo el resultado y comparo
                            {
                            echo"<script type=\"text/javascript\">alert('Ya existe un usuario registrado con el número de cédula indicado.'); window.location='../../p_admin.php';</script>";  
                            
                            }else{
                            if ($f= mysqli_fetch_array($existenciacor)){
                                echo"<script type=\"text/javascript\">alert('Ya existe un usuario registrado con el correo indicado.'); window.location='../../p_admin.php';</script>";  
                                
                            }else
                            {  
                                $strCedula = $cedula;
                                
                                
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
                            mysqli_query($con,"insert into usuarios(cedula,nombre,correo,telefono,direccion,password,ciudad,foto) values ('$cedula','$nombre','$correo','$telefono','$direccion','$password1','$ciudad','default.png')") or die ("Problemas en al insertar los datos del cliente".mysqli_error());      
                           mysqli_query($con,"insert into usuariorol (cedula,rol) values ('$cedula','cliente')")or die ("Problemas en al insertar los datos del cliente".mysqli_error());                                                
                           echo"<script type=\"text/javascript\">alert('Cliente registrado correctamente.'); window.location='../../p_admin.php';</script>";  
                            
                                                       
			}
			else
			{
				echo"<script type=\"text/javascript\">alert('Cédula incorrecta.'); window.location='../../p_admin.php';</script>";     
                                
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('Cédula incorrecta.'); window.location='../../p_admin.php';</script>";     
                        
		}
	}
	else
	{
	echo"<script type=\"text/javascript\">alert('Cédula incorrecta.'); window.location='../../p_admin.php';</script>";     
	}
    
 
                                
                                
                               /* if (validaCedula($cedula) == TRUE){
                            mysqli_query($con,"insert into usuarios(cedula,nombre,correo,telefono,direccion,password,ciudad,foto) values ('$cedula','$nombre','$correo','$telefono','$direccion','$password','$ciudad','default.png')") or die ("Problemas en al insertar los datos del cliente".mysqli_error());      
                            mysqli_query($con,"insert into usuariorol (cedula,rol) values ('$cedula','cliente')")or die ("Problemas en al insertar los datos del cliente".mysqli_error());                                                
                           
                                } else {
                                 echo"<script type=\"text/javascript\">alert('Cédula incorrecta.'); window.location='../../p_admin.php';</script>";     
                                }*/
                             }   
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

    
    
     
        
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

