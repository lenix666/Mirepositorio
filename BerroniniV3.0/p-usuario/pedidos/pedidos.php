

<style type="text/css" media="screen">

#tdpedido{
    text-align:center;
    margin-top: 10px;
    padding: 15px;
}

.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Geneva, Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #008DD4; }.datagrid table td, .datagrid table th { padding: 15px 50px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 14px; font-weight: normal; border-left: 0px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00557F; border-left: 1px solid #E1EEF4;font-size: 13px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEf4; color: #00557F; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }
.datagrid {
    width: 122%;
}
</style>

<div id=" ">    
    <br>
    <h1>PEDIDOS EN MODO<?php echo " $v"; ?></h1>       
    <br>   <a href="reportepedidos.php?v=<?php echo "$v";?>">Generar Reporte</a>
    <br>
    <br>
  
        <?php
           
            $cedula=$datos[0]['Cedula'];
            $re= $Con -> reportepedidos2($cedula,$v);     
            $numeroventa=0;
            
            while ($f=mysqli_fetch_array($re)) {                 
                    if($numeroventa !=$f['idpedido']){
                        
                        ?> <div class="datagrid"><table><thead><tr><th><?php echo 'Pedido ID: '.$f['idpedido'].' || Valor del pedido: $'.$f['valortotal'].''; ?></th><th></thead></table></div> <?php;                        
                        ?>     
    
    
                <div class="datagrid"><table>
                <thead><tr><th>Imagen</th><th>Nombre</th><th>Fecha</th><th>Precio</th><th>Cantidad</th></tr></thead>
                    
                        <?php
                    }                   
                   
                 $numeroventa=$f['idpedido'];
                    echo '<tr>
                        <td><img src="./recursos/img/productos/'.$f['foto'].'" width="100px" heigth="100px" /></td>
                        <td>'.$f['nombre'].'</td>
                        <td>'.$f['fecha'].'</td>
                        <td>'.$f['precio'].'</td>
                        <td>'.$f['cantidad'].'</td>   
                        </tr>';
                     
                }
          
        ?>
    
    

</table></div>    


    <br>
</div>