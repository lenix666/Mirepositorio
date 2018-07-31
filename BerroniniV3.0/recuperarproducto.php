<?php 
 class conexion{
                      function recuperarpublicaciones()
                    {
                        include 'conexion.php';
                        $query ="SELECT *FROM publicaciones";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    } 

                      function recuperarfotosgaleria()
                    {
                        include 'conexion.php';
                        $query ="SELECT *FROM galeria";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    } 



                    function recuperarProd($tipo)
                    {
                        include 'conexion.php';
                        $query ="SELECT *FROM productos where productos.tipo='$tipo'";
                        $resultado = mysqli_query($con, $query);                                       
                        $fila = mysqli_fetch_assoc($resultado);
                        return($fila); 
                    }     

                    function recuperartodos($tipo)
                    {
                        include 'conexion.php';
                        $query ="SELECT *FROM productos where productos.tipo='$tipo'";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    }           

                      function recuperarunoporcodigo($id)
                    {
                        include 'conexion.php';
                        $query ="SELECT *FROM productos where productos.idproducto='$id'";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    }     
                    
                    function listarpedidos()
                    {
                        include 'conexion.php';
                        $re=mysql_query("select * from pedidoproducto inner join pedidos inner join usuarios on pedidoproducto.idpedido=pedidos.idpedido and pedidos.cedula=usuarios.cedula order by idpedido DESC limit 1") or die(mysql_error());	
                        $f=mysql_fetch_array($re);
                        return($f); 
                    } 


					   function reportepedidos($id)
                    {   
                        include 'conexion.php';
                        $query ="SELECT *FROM pedidos inner join pedidoproducto inner join productos on pedidos.idpedido = pedidoproducto.idpedido and pedidoproducto.idproducto = productos.idproducto where pedidos.cedula='$id' ";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    }    


                      function reportepedidos1($id)
                    {   
                        include 'conexion.php';
                        $query ="SELECT usuarios.nombre, usuarios.cedula, usuarios.ciudad, usuarios.direccion, usuarios.telefono, pedidos.idpedido, pedidos.fecha, pedidos.estado, pedidos.valortotal, pedidoproducto.cantidad, productos.nombre as nombreprod, productos.descripcion, productos.precio FROM usuarios inner join pedidos inner join pedidoproducto inner join productos on usuarios.cedula =pedidos.cedula and  pedidos.idpedido = pedidoproducto.idpedido and pedidoproducto.idproducto = productos.idproducto where pedidos.idpedido='$id' ";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    }    


                    function reportepedidos2($id,$estado)
                    {   
                        include 'conexion.php';
                        $query ="SELECT *FROM pedidos inner join pedidoproducto inner join productos on pedidos.idpedido = pedidoproducto.idpedido and pedidoproducto.idproducto = productos.idproducto where pedidos.cedula='$id' and pedidos.estado= '$estado' ";
                        $resultado = mysqli_query($con, $query);                                       
                        return($resultado); 
                    }                 
                 		
                    
                    function crearpedidos(){
                        include 'conexion.php';
                        $date = date('m/d/Y h:i:s', time());                        
                        
                            $datos=$_SESSION['carrito'];
                            $total=0;  
                            for($i=0;$i<count($datos);$i++)
                            {
                                $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
                            }
                            
                            $datosCli = $_SESSION['usuario'];
                            $cedula = $datosCli[0]['Cedula'];
                        
						mysqli_query($con,"insert into pedidos (fecha,estado,valortotal,cedula) values(				
                                '$date','PENDIENTE','$total','$cedula')")or die(mysql_error());
                        
                          $idpedido=mysqli_query($con,"select idpedido from pedidos order by idpedido desc limit 1")or die(mysqli_error());                       
                          $idped= mysqli_fetch_assoc($idpedido);                           
                          $inti = $idped['idpedido'];                                                                              
                                                                                                                         
                        for($i=0;$i<count($datos);$i++)
                        {                               
                            mysqli_query($con, "insert into pedidoproducto (idpedido,idproducto,cantidad) values('$inti','".$datos[$i]['Id']."','".$datos[$i]['Cantidad']."')")or die(mysql_error());
                        }
                        
                    }
                }    

                                
                  
?>