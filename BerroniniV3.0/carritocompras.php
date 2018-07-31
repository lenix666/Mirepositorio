<html>    
    <head>        
        <meta charset="UTF-8">
        <title>Berronini - Productos</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/sesion_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/carrito_style.css">
        <link rel="stylesheet" type="text/css" href="recursos/css/menu_style.css">
             
        <script src="recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="recursos/js/js_index.js" type="text/javascript"></script> 
        <script src="recursos/js/js_carrito.js" type="text/javascript"></script>         
                  
    </head>    
    
    <?php 
             include("recursos/php/general/social.php");
            session_start(); //Inicia una nueva sesión o reanuda la existente                
            if(!isset($_SESSION['usuario'])){ //Determinamos si una variable/sesion está definida y no es NULL
               echo"<script type=\"text/javascript\">alert('Por favor  inicie sesion para agregar productos al carrito'); window.location='index.php';</script>";    
            }
              if(isset($_SESSION['administrador'])){ //Determinamos si una variable/sesion está definida y no es NULL
               echo"<script type=\"text/javascript\">alert('Por favor  inicie sesion como cliente para agregar producto al carrito'); window.location='index.php';</script>";
            }                  
            
            include("recursos/php/conexiones/recuperarproducto.php");    
            $Con = new conexion();

    
   if(isset($_SESSION['carrito'])) //verificamos si existe la sesion
    { 
       
       if(isset($_GET['id']))
            {
               $arreglo=$_SESSION['carrito'];
               $encontro=false;
               $numero=0;
               
               for($i=0;$i<count($arreglo);$i++)
                {
                   if($arreglo[$i]['Id']==$_GET['id'])
                   {
                       $encontro=true;
                       $numero=$i;
                   }
                }

               if($encontro==true)
                    {
                   $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+ $_REQUEST['cantidadpro'];
                   $_SESSION['carrito']=$arreglo;                    
                    }
                else
                    {
                   $nombre="";
                   $precio=0;
                   $imagen="";
                   $re=$Con->recuperarunoporcodigo($_GET['id']);

                   while($f=mysqli_fetch_array($re))
                   {
                       $nombre=$f['nombre'];
                       $precio=$f['precio'];
                       $imagen=$f['foto'];
                   }
                   
                   $datosNuevos=array('Id'=>$_GET['id'],
                                     'Nombre'=>$nombre,
                                     'Precio'=>$precio,
                                     'Imagen'=>$imagen,
                                     'Cantidad'=>1 + $_REQUEST['cantidadpro']-1);
                    array_push($arreglo,$datosNuevos);
                    $_SESSION['carrito']=$arreglo;

               }
       }
   }
   
   else{
       if(isset($_GET['id']))
       {
           $nombre="";
           $precio=0;
           $imagen="";
           $re=$Con->recuperarunoporcodigo($_GET['id']);
           while($f=mysqli_fetch_array($re))
           {
               $nombre=$f['nombre'];
               $precio=$f['precio'];
               $imagen=$f['foto'];
           }
           $arreglo[]=array('Id'=>$_GET['id'],
                             'Nombre'=>$nombre,
                             'Precio'=>$precio,
                             'Imagen'=>$imagen,
                             'Cantidad'=>1);
                             
        $_SESSION['carrito']=$arreglo;  
        $au = $_SESSION['carrito'];
        $au[0]['Cantidad'] = $au[0]['Cantidad'] + $_REQUEST['cantidadpro']-1;
        $_SESSION['carrito']=$au;
               
       }
   }
                    
?>
        



    <body>
    <div id="contenedor_principal">   
    <?php
       include("recursos/php/general/logo.php");    
       include("recursos/php/general/cerrar_sesion.php"); 
       include("recursos/php/general/menu_p.php"); 
    ?>

    <section>
            <h2>CARRITO DE COMPRAS</h2>  
                
                <?php
                    $total=0;
                        if(isset($_SESSION['carrito']))
                            {
                            $datos=$_SESSION['carrito'];
                            $total=0;
                          
                        for($i=0;$i<count($datos);$i++)
                            {
                        
                            
            ?>
                
    <div class="productocarrito">
                    
                <center>
                <span><?php echo $datos[$i]['Nombre'];?></span><br>
                <img src="recursos/img/productos/<?php echo $datos[$i]['Imagen'];?>"><br>                                     
                <span>Precio:<?php echo $datos[$i]['Precio'];?></span><br>
                <span>Cantidad:
                    
                    <input type="number" min="1" max="1000" step="1" value="<?php echo $datos[$i]['Cantidad'];?>"
                     data-precio="<?php echo $datos[$i]['Precio'];?>"
                     data-id="<?php echo $datos[$i]['Id'];?>"
                     class="cantidad" maxlength="4">
                </span><br>

                <span 
                    class="subtotal">SubTotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?>
                </span><br><br>
                    <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
                   
                </center>
    </div>
            <?php
            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
               }
           }
           
           else
            {
            echo '<center><h2>El carrito de compras esta vacio</h2></center>';
            }
            echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
           
           if($total!=0){               
                echo '<br><br><center><a href="./p-usuario/carrito/ingresar_pedido.php" class="aceptar">Confirmar Pedido</a></center>'.'<center><a href="./productos.php" class="aceptar">Seguir Comprando</a></center>';               
            }
        ?>
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
    
    
    


