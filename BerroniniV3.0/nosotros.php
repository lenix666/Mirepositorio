<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Berronini - Nosotros</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/menu_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script>   
        
        
        
                <style>
            
            
            #cssmenu > ul > li.activen > a{
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
                        
            section div{
                display: inline-block;
                width: 45%;
                vertical-align: top; 
                text-align: justify;

          
            }    
            section h3{
                text-align: center;
                font-family:'BallparkWeiner', serif; 
                font-size: 300%;
                font-weight:normal;
            }
            
            section p {
                padding: 25px;
                
            }
            section img {
                padding-top: 50px;
                width: 75%;
                height: 75%;
            }
            
            
        </style>
    
        
    </head>    
    <body>
        <div id="contenedor_principal">   
    
        <?php 
        include("recursos/php/general/social.php");    
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
    <section>
        <div>
            <h3>Ubícanos</h3>
            <img src="recursos/img/general/map-point.png" alt="map-point"/>

        </div>
        <div>            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6873.2041883912!2d-78.85051316380996!3d-2.2014069224743937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d2988b64accb55%3A0x6047343368778c4a!2zRTQ3LCBBbGF1c8Ot!5e1!3m2!1ses-419!2sec!4v1481954728937" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br><br><br>
        <hr>
        <div>
            <h3>Misión</h3>
            <p>“Somos una empresa comprometida en satisfacer las necesidades de nutrición, 
                mediante la entrega de productos inocuos a la sociedad, elaborados con la más alta calidad,
                y desarrollados por personal altamente calificado, fortaleciendo el crecimiento y desarrollo 
                de nuestra comunidad.”
            </p>   
        </div>
        <div>
            <h3>Visión</h3>
            <p>Ser un referente en el mercado nacional con proyección al mercado externo mediante la elaboración 
                de productos alimenticios seguros y de alto valor nutricional. Reconocidos por: 
                Ser la primera opción de compra para sus clientes por su valor nutricional calidad y precio. 
                La innovación, al estar presente en los diferentes segmentos de mercado con productos desarrollados 
                para cada uno. Mantener procesos eficientes con última tecnología. Ser una empresa rentable 
                reconocida por su mayor activo su “Marca”.</p>
        </div>
   

        </div>
        </div>
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
    
    
    


