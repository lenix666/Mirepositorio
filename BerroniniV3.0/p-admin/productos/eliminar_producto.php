<div id="formulario">
				   <hgroup>
				      <h1>Buscar Producto</h1>
				    </hgroup>
				       <form>
					    <label for="buscar">SELECCIONE PARA BUSCAR:</label>
						<select >
						    <option value="nombre" >Nombre</option>
                            <option value="codigo" >Código</option>
                           
                       </select> 
                      <BR/><BR/>
						 <input type="" id="nombre" placeholder="Escriba nombre o codigo a buscar" required  >
					    
						
						
						   <input type="submit" value="BUSCAR" id="btnsubmit" >
						 <br/>
						 <br/>
						
					   </form>
					   
				  
				</div>
				<br/>
						 <br/>
<div id="formulario">
				   <hgroup>
				      <h1>Eliminar producto</h1>
				    </hgroup>
				       <form>
					    <label for="codigo">Código:</label>
						 <input type="text" id="codigo" placeholder="Código" required  >
					     <label for="nombre">Nombre de producto:</label>
						 <input type="text" id="nombre" placeholder="Nombre de producto" required  >
						  <label for="tipo">Tipo de producto:</label>
						 <select >
						    <option value="queso" >Queso</option>
                            <option value="yogurt" >Yogurt</option>
                            <option value="otros" >Otros</option>
                           
                       </select> 
						 <label for="precio">Precio:</label>
						 <input type="number" id="precio" placeholder="Valor de producto" required min=0>
						 <label for="stock">Stock:</label>
						 <input type="number" id="stock" placeholder="stock"  required min=0>
					<br/>
						   <input type="submit" value="Eliminar Producto" id="btnsubmit" >
						 <br/>
						 <br/>
					   </form>
				  
				  
</div>