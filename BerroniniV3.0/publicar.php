<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Berronini - Galeria</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script>      

<style>
    #formulario{
        border-style: none;
        text-align: left;
    }

   
    #formulario label input {
        display: inline-block;
        width: 45%;
        text-align: left;
        font-size: 18px;
        font-family: serif;  
        vertical-align: top;
       
    }

      #formulario textarea {
        width: 55%;
        height: 150px;
        margin-top: 15px;         
    }

     #formulario #foto{
        vertical-align: top;
        width: 30%;
        margin-top:25px;
    }
        
         #formulario #cambiar{
        display: inline-block; 
        width: 50%;
        margin: auto;       
    }

         #formulario #btnpublicar{
        
        display:block; 
        width: 20%;
        margin: auto;       
    }
        
        
</style>

        
    </head>    
    <body>
        <div id="contenedor_principal">   
    
        <?php 
        
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
                include ("recursos/php/general/slider.php");
            ?>

        <br>
        <section>
               <div id="formulario">
                   
               
                <form action="recursos/php/conexiones/publicarblog.php" method="post"  enctype="multipart/form-data">
                        <label for="titulo">TITULO:</label>
                        <input type="text" name="titulo" placeholder="Escriba el titulo de la publicacion" required >
                        <label for="nombre1">Descripción:</label>
                        <textarea name="descripcion"></textarea>
                        <label for="foto" id="foto">Fotografia</label>
                        <div id="cambiar">
                            <input type="file" name="imagen">
                        </div>
                    <input type="submit" value="PUBLICAR" id="btnpublicar" >
                        
                </form>
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
    