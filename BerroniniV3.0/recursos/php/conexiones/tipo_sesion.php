<?php        
    ini_set("session.cookie_lifetime","7200");
    ini_set("session.gc_maxlifetime","7200");
    session_start(); //Inicia una nueva sesión o reanuda la existente 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Berronini - Inicio</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="../../css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="../../css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="../../css/main_style.css">
             
        <script src="../../js/jquery.min.js" type="text/javascript"></script>
        <script src="../../js/js_index.js" type="text/javascript"></script>
        
         
            
        
    </head>
    <body>
<div id="contenedor_principal">    
     
           <ul id="social_side_links">
	<li><a style="background-color: #3c5a96;" href="http://facebook.com" target="_blank"><img src="https://dl.dropboxusercontent.com/u/78039576/CodePen/facebook-icon.png" alt="" /></a></li>
	<li><a style="background-color: #1dadeb;" href="http://twitter.com" target="_blank"><img src="https://dl.dropboxusercontent.com/u/78039576/CodePen/twitter-icon.png" alt="" /></a></li>
	<li><a style="background-color: #1178b3;" href="http://linkedin.com" target="_blank"><img src="https://dl.dropboxusercontent.com/u/78039576/CodePen/linkedin-icon.png" alt="" /></a></li>
</ul>

            
            <section>
                <article>
                    <br><br>
                    <br>
                    <br>
                    <a>El sistema a dectectado que los datos pertenecen a una cuenta que tambien es administrador, por favot elije la opción con la que deseas trabajar.</a>
                    <br><br><br>
                    <form method="post" class="login" action="verificar_dual.php">
                        <div id="cajas">
                            
                            <a href="../../../index.php" title="Berronini 2017"><img src="../../img/general/atras.png" width="80px" height="80px" border="0"></a>
                            <div id="sel">
                                <h2>Selecciona el tipo de sesión</h2>  
                                
                            </div>                                                                         
                            <style>
                                #sel{
                                    width: 100%;
                                    text-align: center;
                                    text-decoration: #1dadeb;
                                    font-size: 20px;
                                    text-transform: uppercase;
                                    padding-bottom: 5%;
                                }
                                .submtton{
                                    padding-left: 30px;
                                    padding-right: 30px;
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                    background-color: skyblue;
                                    
                                }
                                .submtton:hover{
                                    background-color: black;
                                    color: white;
                                }
                            </style>
                            <label class="client">
                                <span>Cliente:</span>
                                <input id="userol" name="userol" value="cliente" checked="checked" type="radio">
                                <img src="../../img/general/cliente.png">
                            </label>
                            <label class="adminis">
                                <span>Administrador:</span>
                                <img src="../../img/general/admin.png">
                                <input id="userol" name="userol" value="administrador" type="radio">
                            </label>   
                        <br><br>   
                        
                            <button class="submtton" type="submit">Ingresar</button>
                            
                             
                        </div>

                    </form>
                    
                    <br>
                    <br><br>
                    <br>
                </article>
            </section>
            
           
            
        </div>
    </body>
</html>
