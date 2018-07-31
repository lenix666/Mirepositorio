<div id="formulario">
				   <hgroup>
				      <h1>ELIMMINAR CLIENTE</h1>
				    </hgroup>
				       <form>
					    <label for="buscar">SELECCIONE PARA BUSCAR:</label>
						<select >
						    <option value="nombre" >Nombre</option>
                          <option value="codigo" >Código</option>
						</select> 
                      <br/><br/>
                      <input type="search" id="buscar" placeholder="Escriba nombre o codigo a buscar" required>			  					
								<input type="submit" value="BUSCAR" id="btnsubmit">
						 <br/>
						 <br/>						
					   </form>		  
							<br/>
						 <br/>
</div>				
<div id="formulario">
				   <hgroup>
				      <h1>Perfil cliente</h1>
				    </hgroup>
				       <form>
					    <label for="codigo">Código:</label>
						 <input type="" id="codigo" placeholder="Codigo" required  >
					     <label for="nombre">Nombre:</label>
						 <input type="text" id="nombre" placeholder="Nombre" required  >
						 <label for="cedula">Cédula:</label>
						 <input type="number" id="cedula" placeholder="Cédula de identidad" required min=0>
						 <label for="direccion">Dirección:</label>
						 <input type="text" id="direccion" placeholder="Dirección"  required>
						 <label for="telefono">Teléfono:</label>
						 <input type="tel" id="telefono" placeholder="Teléfono" required min=0>
						 <label for="correo">E-mail:</label>
						 <input type="email" id="correo" placeholder="Correo electronico">
											                          

						 
						   <input type="submit" value="Eliminar cliente" id="btnsubmit" >
					   </form>	  
</div>

