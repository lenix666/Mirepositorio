<div id="formulario">
				    <hgroup>
				      <h1>Lista de pedidos en espera</h1>
				    </hgroup>
				       <form>
							
                      <table width="100%">
			<tr>
                                <td>Foto</td>
				<td>ID Producto</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Precio TOTAL</td>
				<td>Tipo</td>				
                                <td></td>
				
			</tr>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script type="text/javascript" src="./p-admin/productos/js_modificarproducto.js"></script>		
		
		<?php
		    
				include './recursos/php/conexiones/conexion.php';
				 
	               
                    
				$resultado=mysqli_query($con,"select * from productos  ")or die(mysqli_error());      
             			
			 while ($row=mysqli_fetch_array($resultado)){
				echo '
				<tr>
					<td><img src=./recursos/img/productos/'.$row[6].' width="50" height="50"/></td>
					<td><input type="text" class="idproducto" type="text" value="'.$row[0].'"></td>					
					<td><input type="text" class="nombre" type="text" value="'.$row[1].'"></td>
                                        <td><input type="text" class="descripcion" type="text" value="'.$row[2].'"></td>
                                        <td><input type="text" class="precio" type="num" value="'.$row[3].'"></td>
                                        <td><select class="tipo">
					         <option  >'.$row[5].'</option>
	                         <option >Queso</option> 
                            <option >Yogurt</option>
                            <option >Varios</option>							
                           
                       </select> </td>  
                            
					<td><button class="modificarproducto" data-id="'.$row[0].'">Modificar</button></td>
                                        <td><button class="eliminarproducto" data-id="'.$row[0].'">Eliminar</button></td>    
				</tr>
				';
			}
		?>
	</table>
						
					   </form>
					   
				  
				
						<br/>
						 <br/>
				
				  
</div>