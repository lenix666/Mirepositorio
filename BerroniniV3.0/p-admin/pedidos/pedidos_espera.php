<div id="formulario">
				    <hgroup>
				      <h1>Lista de pedidos en espera</h1>
				    </hgroup>
				       <form>
							
                      <table width="100%">
			<tr>
				<td>ID</td>
				<td>FECHA</td>
				<td>ESTADO</td>
				<td>VALOR TOTAL</td>
				<td>CEDULA</td>				
				<td>Modificar</td>
			</tr>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script type="text/javascript" src="./p-admin/pedidos/js_modificarpedido.js"></script>		
		
		<?php
		    
				include './recursos/php/conexiones/conexion.php';
				 
	                $cedula = $datos[0]['Cedula'];
                    
				$resultado=mysqli_query($con,"select * from pedidos  ")or die(mysqli_error());      
             			
			 while ($row=mysqli_fetch_array($resultado)){
				echo '
				<tr>
					<td>
						<input type="text" readonly="readonly" class="id" value="'.$row[0].'">
					<td><input type="text" class="fecha" readonly="readonly" value="'.$row[1].'"></td>
					<td><select class="estado">
					         <option  >'.$row[2].'</option>
	                         <option >CANCELADO</option> 
                            <option >CONFIRMADO</option>
							<option >PENDIENTE</option>
                           
                       </select> </td>
					<td><input type="text" readonly="readonly" class="valortotal" value="'.$row[3].'"></td>
					<td><input type="text" readonly="readonly" class="cedula" value="'.$row[4].'"></td>					
					<td><button class="modificarpedido" data-id="'.$row[0].'">Modificar</button></td>
				</tr>
				';
			}
		?>
	</table>
						
					   </form>
					   
				  
				
						<br/>
						 <br/>
				
				  
</div>