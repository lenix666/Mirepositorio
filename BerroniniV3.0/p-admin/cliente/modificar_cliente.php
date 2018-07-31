<div id="formulario">
				    <hgroup>
				      <h1>Lista de clientes registrados</h1>
				    </hgroup>
				       <form>
							
                      <table width="100%">
			<tr>
                                <td>Foto</td>
				<td>Nombre</td>
				<td>Cédula</td>
				<td>Ciudad</td>
				<td>Dirección</td>
                                <td>Teléfono</td>
				<td>Correo</td>				
                                <td>Contraseña</td>
                                <td></td>
				
			</tr>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	    <script type="text/javascript" src="./p-admin/cliente/js_modificarcliente.js"></script>		
		
		<?php
		    
				include './recursos/php/conexiones/conexion.php';
                                
                                $actual = $_SESSION['administrador'];
                                $at = $actual[0]['Cedula'];                                                                                   
				$resultado=mysqli_query($con,"select * from usuarios where cedula <> $at ")or die(mysqli_error());      
             			
			 while ($row=mysqli_fetch_array($resultado)){
				echo '
				<tr>
					<td><img src=./recursos/img/usuario/'.$row[7].' width="50" height="50"/></td>
					<td><input type="text" class="nombre" type="text" value="'.$row[0].'"></td>					
					<td><input type="text" class="cedula" type="text" value="'.$row[1].'"></td>
                                        <td><input type="text" class="ciudad" type="text" value="'.$row[2].'"></td>
                                        <td><input type="text" class="direccion" type="num" value="'.$row[3].'"></td>
                                        <td><input type="text" class="telefono" type="num" value="'.$row[4].'"></td>
                                        <td><input type="text" class="correo" type="num" value="'.$row[5].'"></td>
                                        <td><input type="password" class="password" type="num" value="'.$row[6].'"></td>
                                         
                            
					<td><button class="modificarclientep" data-id="'.$row[1].'">Modificar</button></td>
                                        <td><button class="eliminarclientep" data-id="'.$row[1].'">Eliminar</button></td>    
				</tr>
				';
                                
			}
		?>
	</table>
						
					   </form>
					   
				  
				
						<br/>
						 <br/>
				
				  
</div>