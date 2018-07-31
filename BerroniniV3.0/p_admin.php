<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Berronini</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/menu_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script>
        <script src="recursos/js/js_menu.js"></script>                        
        
                
    </head>    
    <body>
    
        <div id="contenedor_principal">   
    
            <?php 
                include("recursos/php/general/logo.php");
        
            session_start(); //Inicia una nueva sesión o reanuda la existente                
            if(isset($_SESSION['usuario']) || isset($_SESSION['administrador'])){ //Determinamos si una variable/sesion está definida y no es NULL
                include("recursos/php/general/cerrar_sesion.php");
            }else
            { 
                include("recursos/php/general/sesion.php");
            } 
        
                include("recursos/php/general/menu_p.php"); 
            ?>
                    
            
            
            <br>
            <section id="perfiladmin">
                                
                <aside id="menuadmin">
                <h2>Opciones de Administrador</h2><br>    
                <div id="cssmenu_cli">
                    <ul class="menu12">
                        <li class="" ><a href="#">PERFIL</a>
                            <ul>
                                <li id="perfilaad"><a href="" >Ver perfil</a></li>                                
                                <li id="modificaradmin"><a href="" >Modificar Información</a></li>                                
                            </ul>
                        </li>
                        <li class=""><a href="#">PRODUCTOS</a>
                            <ul>
                                <li id="ingresarproducto"><a href="" >Ingresar Producto</a></li>
                                <!--<li id="buscarproducto"><a href="">Buscar Producto</a></li>-->
                                <li id="modificarproducto"><a href="">Modificar/Eliminar</a></li>
                                <!--<li id="eliminarproducto"><a href="">Eliminar Producto</a></li>-->
                            </ul>
                        </li>

                        <li class=""><a href="#">CLIENTES</a>
                            <ul>
                                <li id="ingresarcliente"><a href="">Ingresar Cliente</a></li>
                                <!--<li id="buscarcliente"><a href="">Buscar Cliente</a></li>-->
                                <li id="modificarcliente"><a href="">Modificar/Eliminar</a></li>
<!--                                <li id="eliminarcliente"><a href="">Eliminar Cliente</a></li>-->
                            </ul>       
                        </li>
                        <li class=""><a href="#">PEDIDOS</a>
                            <ul>
                                <li id="verpedidos"><a href="">Administrar Pedidos en Espera</a></li>
                            </ul>      
                        </li>
                        <li class=""><a href="#">REPORTES</a>
                            <ul>
                                <li id="reportclientes"><a href="">Generar Reporte de Clientes</a></li>
                                <li id="reportproductos"><a href="">Generar Reporte de Productos</a></li>
                                <li id="reportpedidos"><a href="">Generar Reporte de Pedidos</a></li>
                            </ul>   
                        </li>
                    </ul>
                    </div>                

                <br><br><br><br>
                </aside>
                
                <!--Perfil-->
                <article id="inforadmin">
                    <div class="info_admin">
                        <?php include("./p-admin/info_administrador.php"); ?> 

                    </div> 
                    
                    <div class="ingresar_admin">
                        <?php include("./p-admin/mod_infor_admin.php"); ?> 

                    </div>  
                
                <!--Productos-->
               
                
                <div class="ingresar_producto">
                    <?php include("./p-admin/productos/ingresar_producto.php"); ?>  
                </div> 
                
                <div class="buscar_producto">
                    <?php //include("./p-admin/productos/buscar_producto.php"); ?>  
                </div> 
                
                <div class="modificar_producto">
                    <?php include("./p-admin/productos/modificar_producto.php"); ?>  
                </div> 
                
                <div class="eliminar_producto">
                    <?php //include("./p-admin/productos/eliminar_producto.php"); ?>  
                </div> 
                
                 <!--Clientes-->
                
                <div class="ingresar_cliente">
                    <?php include("./p-admin/cliente/ingresar_cliente.php"); ?>  
                </div> 
                
                <div class="buscar_cliente">
                    <?php //include("./p-admin/cliente/buscar_cliente.php"); ?>  
                </div> 
                
                <div class="modificar_cliente">
                    <?php include("./p-admin/cliente/modificar_cliente.php"); ?>  
                </div> 
                
                <div class="eliminar_cliete">
                    <?php //include("./p-admin/cliente/eliminar_cliente.php"); ?>  
                </div> 
                
                  <!--Pedidos-->
                 
                <div class="ver_pedidos">
                    <?php include("./p-admin/pedidos/pedidos_espera.php"); ?>  
                </div> 
                
                   <!--Reportes-->
                  
                <div class="reporte_clientes">
                    <?php include("./p-admin/reportes/admin_reporte_cliente.php"); ?>  
                </div> 
                
                <div class="reporte_productos">
                    <?php include("./p-admin/reportes/admin_reporte_producto.php"); ?>  
                </div> 
                
                <div class="reporte_pedidos">
                    <?php include("./p-admin/reportes/admin_reporte_pedidos.php"); ?>  
                </div> 
                
  
                
                </article>
            </section>       

            <br>
        <footer>
                <?php 
                    include("recursos/php/general/pie_pag.php"); 
                ?> 
        </footer>
        </div>
     <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>  
    <script src="js/menu.js"></script>  
    </body>
     
</html>