<html>    
    <head>        
        <meta charset="UTF-8">
        <title>Berronini - Productos</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/menu_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script>
        
        <style>
            
            
            #cssmenu > ul > li._has-sub > a{
              color: #ffffff;
              box-shadow: inset 0 0 3px #000000;
              -moz-box-shadow: inset 0 0 3px #000000;
              -webkit-box-shadow: inset 0 0 3px #000000;
              background: #070707;
              background: -moz-linear-gradient(top, #262626 0%, #070707 100%);
              background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));
              background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);
              background: -o-linear-gradient(top, #262626 0%, #070707 100%);
              background: -ms-linear-gradient(top, #262626 0%, #070707 100%);
              background: linear-gradient(to bottom, #262626 0%, #070707 100%);
            }
            
        </style>
        
        <style type="text/css">
            
            .nav_productos #todos{
                background-color: royalblue;
            }
            #logo_login{
                width: 30%;
                height: 25%;
                display: inline-block;

            }
                        
        </style>
                 

    </head>    
    <body>
    <div id="contenedor_principal">   
    
        <?php 
        include("recursos/php/general/social.php");
                include("recursos/php/conexiones/recuperarproducto.php");
                $Con = new conexion();

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
        
     <section>
         <aside>
                    <?php
                    include("recursos/php/general/mapa_sitio.php");
                    ?>
                </aside>
         <article>
             <div id="productos">                 
                <?php 
                    include("recursos/php/productos/prod_queso.php");
                    include("recursos/php/productos/prod_yogurt.php"); 
                    include("recursos/php/productos/prod_otros.php"); 
                ?>                 
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
    </body>
     
    </html>
    
    
    


