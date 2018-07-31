<?php
    
    class UpdateCli{
        function UpdatePic($nueva){            
            include '../recursos/php/conexiones/conexion.php';
            $cliente = $_SESSION['usuario'];            
            $cedula = $cliente[0]['Cedula'];                               
            $sql = mysqli_query($con, "update usuarios set foto='".$nueva."' where usuarios.cedula='".$cedula."'");
        }
        function ActuSesion(){
            include '../recursos/php/conexiones/conexion.php';
            if (isset($_SESSION['usuario'])){
                $ss= $_SESSION['usuario'];
                $ced= $ss[0]['Cedula'];                  
                unset($_SESSION['usuario']);                
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
		$_SESSION['usuario']=$arreglo_usu;                		                
                }
            }
            
        }        
        function ContraActual($contt){
            include '../recursos/php/conexiones/conexion.php';
            $ss= $_SESSION['usuario'];
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
            $cliente = $_SESSION['usuario'];            
            $cedula = $cliente[0]['Cedula']; 
            $sql = mysqli_query($con, "update usuarios set password='".$pass."' where usuarios.cedula='".$cedula."'");
        }    
        function ActuDatos($nombre,$ciudad,$direccion,$telefono,$email){
            include '../recursos/php/conexiones/conexion.php';
            $cliente = $_SESSION['usuario'];            
            $cedula = $cliente[0]['Cedula']; 
            $sql = mysqli_query($con, "update usuarios set nombre='".$nombre."',    
                ciudad='".$ciudad."',direccion='".$direccion."',telefono='".$telefono."',
                    correo='".$email."' where usuarios.cedula='".$cedula."'");
       
        }
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

