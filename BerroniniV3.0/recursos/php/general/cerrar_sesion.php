
<div class="container">                    
        <div class="post">        
            <div class="btn">
                <a class="correo">
                    <?php       
                       if(isset($_SESSION['usuario'])){
                           $datos=$_SESSION['usuario'];
                           $tipo='usuario';
                       }       
                       if(isset($_SESSION['administrador'])){
                           $datos=$_SESSION['administrador'];
                           $tipo='administrador';
                       }

                       $correo_u=$datos[0]['Correo'];

                       echo $correo_u;
                   ?>    
                </a>
                <?php
                   if ($tipo=='administrador'){
                    ?>
                        <a href="p_admin.php">Mi Perfil</a>                            
                    <?php
                   }
                   
                   if ($tipo=='usuario'){
                    ?>
                        <a href="p_cliente.php">Mi perfil</a>
                         <a  id="iconcarrito" href="carritocompras.php"><img src="./recursos/img/general/carrito_ico.png"></a>  <!--CAMBIADO XD XD-->
                        
                        
                    <?php
                   }
                
                
                ?>
                
                
                <a href="recursos/php/conexiones/desconexion.php" class="">Cerrar sesión</a>                            
                
            </div>
        </div>
                                                              
</div>  

<script src="recursos/js/js_sesion.js"></script>  