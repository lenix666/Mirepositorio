<!DOCTYPE html>
<html>    
    <head>        
        <meta charset="utf-8">
        <title>Reporte Pedidos</title>
        
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
	width: 100%;
	padding: 20px;
	}

	.dcl
	{
		margin-top: 5px;
		text-align: left;
		display: inline-block;
		width: 45%;	
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
		width: 250px;
	}

	
	.btn{
    border-radius: 2px;
    border: none;
    background-color:  #4084e0; 
    color: white;
    padding: 0.3em 1em;
    border-radius: 25px;
	}


#tdpedido{
    text-align:center;
    margin-top: 10px;
    padding: 15px;
	}
	
	</style>
    </head>    

    <body>
        
        <div id="contenedor_principal">   
    
        <?php 

                session_start();
                if(isset($_SESSION['usuario'])){
                    $datos= $_SESSION['usuario'];
                    $cedula=$datos[0]['Cedula'];
                }
                include("recursos/php/conexiones/recuperarproducto.php");
                $Con = new conexion();
                $estado='Todos';
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
		            <label class="dcl2"><?php echo $datos[0]['Nombre'];?></label>  	
		            </div>
		            
		            <div class="dcl">
		            <label class="dcl1">CI o Ruc : </label>    
		            <label class="dcl2"><?php echo $datos[0]['Cedula'];?></label> 	
		            </div>
		            
		            <div class="dcl">
		            <label class="dcl1">Dirección :</label>    
		            <label class="dcl2"><?php echo $datos[0]['Ciudad']."-".$datos[0]['Direccion'];?></label>		       	
		            </div>		       
		            
		            <div class="dcl">
		            <label class="dcl1">Teléfono :</label>    
		            <label class="dcl2"><?php echo $datos[0]['Telefono'];?></label>	                   	
		            </div>	                   
		       
		                    
        </div>
        
        <h2>REPORTE DE PEDIDOS</h2>
           
		
            <?php
           
            if(isset($_GET['v'])){
            $estado= $_GET['v'];    
            }
	    $numeroventa=0;

            if ($estado=='Todos') {
            
                $re= $Con -> reportepedidos($cedula);  
            }
            else
            {
                $re= $Con -> reportepedidos2($cedula,$estado);
            }
            echo "Pedidos"."--".$estado ."<br>";
            while ($f=mysqli_fetch_array($re)) {
                    if($numeroventa !=$f['idpedido']){                        
                        echo '<tr><td id="tdpedido" colspan="7">Pedido Número: '.$f['idpedido'].'<br> Total: '.$f['valortotal'].' </td></tr>';
            
                        
                        
        ?>
        <table border="1px" width="100%">   
        <tr>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Fecha</td>
            <td>Precio</td>
            <td>Cantidad</td>            
            <td>Estado</td>
        </tr>   <?php
                        
                    }
                    $numeroventa=$f['idpedido'];
                    echo '<tr>
                        <td><img src="recursos/img/productos/'.$f['foto'].'" width="100px" heigth="100px" /></td>
                        <td>'.$f['nombre'].'</td>
                        <td>'.$f['fecha'].'</td>
                        <td>'.$f['precio'].'</td>
                        <td>'.$f['cantidad'].'</td>                        
                        <td>'.$f['estado'].'</td>
                        </tr>';
                
            }    
        ?>
    
    </table>


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