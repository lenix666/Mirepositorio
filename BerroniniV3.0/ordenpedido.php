<!DOCTYPE html>
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Orden de Pedido</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="recursos/css/fonts.css" rel="stylesheet" type="text/css"/>
                
        <link rel="stylesheet" type="text/css" href="recursos/css/main_style.css">                       

	<style type="text/css">
	
	
	.caja{
	margin: auto;
	margin-bottom: 10px;
	border-style: solid;
	}

		.img
	{
    margin-top: 10px;
    display:inline-block;
    vertical-align: top;
    text-align: center;
	}

	.texto
	{	
	margin-top: 15px;
	display: inline-block;
    text-align: center;
	}

	.datoscliente
	{
	display: inline-block;
	width: 55%;
	padding: 20px;
	}

	.dcl
	{
		margin-top: 5px;
		text-align: left;
		display: inline-block;
		width: 100%;	
	}
	
	.dcl1
	{
		
	font-weight: bold;
	width: 150px;
	float: left;
	}		
	
	.dcl2
	{
		float: left;
		width: 500px;
	}

	.dcl3
	{
		float: left;
		width: 100px;
	}

	.datospedido
	{
		padding-top: 20px;
		width: 35%;
		text-align: center;
		vertical-align: top;
		margin-left: 25px;
		display: inline-block;
		
	}
	

	table{
	width: 100%;	
	border-collapse: collapse;
	}
	
	.titulo{
    background-color:  #4084e0;
    color: WHITE;
    font-weight: bold;
    padding: 10px;
	}	

	table  td{
	border-style: solid;
	}

	.btn{
    border-radius: 2px;
    border: none;
    background-color:  #4084e0; 
    color: white;
    padding: 0.3em 1em;
    border-radius: 25px;
	}

	td{
	text-align: center;
	}


	.izq{
    text-align: left;    
	}

	.total
	{
		text-align: right;
	}
	.sincolor
	{
		border-style: none;	
	}

	.der{
    text-align: right;
	}
	</style>

    </head>    

    <body>
        
        <div id="contenedor_principal">   
    
        <?php 
                include("recursos/php/conexiones/recuperarproducto.php");
                $Con = new conexion();
                $idped=$_GET["id"];
                $datos = $Con->reportepedidos1($idped);
                $datos2 = $Con->reportepedidos1($idped);

                $f= mysqli_fetch_array($datos);
         ?>

		<div class="caja">
        	<div class="img">
            <?php  
            include("recursos/php/general/logo.php"); 
            ?>  
        	</div>

        	<div class="texto">
            <h1>PRODUCTOS LACTEOS BERRONINI</h1>
            <h2>JESUS BERMEO</h2> 
            <h5>Direccion: Alausi, Comunidad Baquel</h5>
            <h5>Cel:0995809074</h5>
            <h5>Chimborazo - Ecuador</h5>
            <h3>RUC:0600112233001  -- N. AUT: 1114589860</h3>
			</div>
		</div>
    	
    	<div class="datoscliente">
   
		            <div class="dcl">
		            <label class="dcl1">Cliente: </label>    
		            <label class="dcl2"><?php echo $f["nombre"];?></label>  	
		            </div>
		            
		            <div class="dcl">
		            <label class="dcl1">CI o Ruc : </label>    
		            <label class="dcl2"><?php echo $f["cedula"];?></label> 	
		            </div>
		            
		            <div class="dcl">
		            <label class="dcl1">Dirección :</label>    
		            <label class="dcl2"><?php echo $f["ciudad"]."-".$f["direccion"];?></label>		       	
		            </div>		       
		            
		            <div class="dcl">
		            <label class="dcl1">Teléfono :</label>    
		            <label class="dcl2"><?php echo $f["telefono"];?></label>	                   	
		            </div>	                   
		       
		                    
        </div>
   		
		<div class="datospedido">
					
					<div class="dcl">
					<label class="dcl1">Número de Orden:</label> 
		            <label class="dcl3"> <?php echo $f["idpedido"];  ?></label> 
		      		</div>

		      		<div class="dcl">
		            <label class="dcl1">Fecha:</label>    
		            <label class="dcl3"><?php echo $f["fecha"]; ?></label>    
					</div>

					<div class="dcl">
		            <label class="dcl1">Estado:</label>    
		            <label class="dcl3"><?php echo $f["estado"]; ?></label>
		            </div> 
		</div>
   					 	
		<table>	
		       <tr>
		            <td class="titulo">CANTIDAD</td>    
		            <td class="titulo">DESCRIPCIÓN</td>    
		            <td class="titulo">PRECIO UNITARIO</td>       
		            <td class="titulo">VALOR TOTAL</td>
		       </tr> 
		       
		    <?php

		    $subtotal=0;
		    $porcentiva=14;

		    while ($f= mysqli_fetch_array($datos2)) 
		    {
		    	$subtotal=$subtotal +($f["cantidad"]*$f["precio"]);	
		    ?>		
		    	
		    	<tr>
		            <td class="cantidad"><?php echo $f["cantidad"]; ?></td>    
		            <td class="descripcion"><?php echo $f["nombreprod"]." - ".$f["descripcion"]; ?></td>    
		            <td class="preciounitario"><?php echo $f["precio"]; ?></td>       
		            <td class="total"><?php echo  $f["cantidad"]*$f["precio"]; ?></td>
		       </tr> 

		    <?php   
		    }
			?>
		    
       <tr>
           <td class="sincolor" colspan="2"></td>
           <td>Subtotal:</td>
           <td class="der"><?php echo $subtotal; ?> </td>   
       </tr> 
       
       
       <tr>
       	   <td class="sincolor" colspan="2"></td>
           <td><?php echo "IVA"."$porcentiva"." % ";?></td>
           <td class="der"><?php echo ($subtotal*($porcentiva/100));?></td>  
       </tr> 
       
       <tr>
       	   <td class="sincolor" colspan="2"></td>
           <td>Total</td>
           <td class="der"><?php echo ($subtotal + ($subtotal*($porcentiva/100))); ?></td>
       </tr>      
    </table>
    
    <br>
    <br>

    <div align="center">
    
        <input type="submit" onclick="window.print()" class="btn" value="Imprimir">
        
        <?php
            if((isset($_SESSION["administrador"]))){
                    echo "<a href='p_admin.php'><input type='button' class='btn' value='Aceptar'></a>";
            }

            else{
                    echo "<a href='p_cliente.php'><input type='button' class='btn' value='Regresar'></a>";
            }
        
            ?>
       
    	</div>      

    </div>
    </body>
</html>