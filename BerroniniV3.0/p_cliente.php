<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Berronini - Clientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/menu_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script>
        <script src="recursos/js/js_menu.js"></script> 
        
        <script src="recursos/js/jquery-latest.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_mcliente.js"></script> 
         
    </head>    
    <body>
    
        <div id="contenedor_principal">   
    
            <?php 
            include("recursos/php/general/logo.php");
            ini_set("session.cookie_lifetime","7200");
            ini_set("session.gc_maxlifetime","7200");
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
                <h2>Opciones de cliente</h2><br>
                <div id="cssmenu_cli">
                <ul class="menu12">
                        <li class="activado" id=""><a href="#">Perfil</a>
                            <ul>
                                <li id="info_"><a href="">Ver Perfil</a></li>                        
                            </ul>
                            <ul>
                                <li id="modificar_info_cliente"><a href="">Modificar Informacion Personal</a></li>                                
                            </ul>
                        </li> 
                        <li class=""><a href="#">Reportes</a>
                            <ul>
                                <li id="generareportepedidos"><a href="">Todos los Pedidos</a></li>
                                <li id="generareportepedidospendientes"><a href="">Pedidos Pendientes</a></li>
                                <li id="generareportepedidoscancelados"><a href="">Pedidos Cancelados</a></li>
                                <li id="generareportepedidosconfirmados"><a href="">Pedidos Confirmados</a></li>
                            </ul>   
                        </li>                      
                        <li class=""><a href="#">Contactarse</a>
                            <ul>
                                <li id="contactaradmin"><a href="">Contactarse con el Administrador</a></li>
                            </ul>      
                        </li>
                    </ul>

        </div>
                

                <br><br><br>
                
                
                </aside>
                
                <article id="inforadmin">                    
                    <div class="info">
                        <?php include("./p-usuario/info_usuario.php"); ?>
                    </div>                                        
                    <div class="modinfocli">
                        <?php include("./p-usuario/mod_info_usuario.php"); ?>                   
                    </div>
                    <div class="reportepedidos">
                        <?php include("./p-usuario/usuario_reportepedidos.php"); ?>                   
                    </div>                 
                    <div class="reportepedidosp1">
                        <?php 
                        $v='PENDIENTE';
                        include("./p-usuario/pedidos/pedidos.php"); 
                        ?>                   
                    </div>  
                    <div class="reportepedidosp2">
                        <?php 
                        $v='CANCELADO';
                        include("./p-usuario/pedidos/pedidos.php"); 
                        ?>                   
                    </div>                                       
                    <div class="reportepedidosp3">
                        <?php 
                        $v='CONFIRMADO';
                        include("./p-usuario/pedidos/pedidos.php"); 
                        ?>                   
                    </div>
                    <div class="contactarseconadmin">
                        <?php include("./p-usuario/contacto.php"); ?>                   
                    </div>                               
                </article>
            </section>
            <br>
            
        
            <footer><?php include("./recursos/php/general/pie_pag.php"); ?> </footer> 
        </div>
        
        
        
     <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>  
    <script src="js/menu.js"></script>  
    </body>
     
</html>