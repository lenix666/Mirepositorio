<div id="formulario"> 
    <form action="./p-admin/productos/ingresar_producto_db.php" method="post" enctype="multipart/form-data">
                <label for="productoid">Producto ID:</label>
                     <input type="text" name="productoid" placeholder="Código único del producto" required  >
                 <label for="nombre">Nombre de producto:</label>
                     <input type="text" name="nombre" placeholder="Nombre de producto" required  >
                      <label for="tipo">Tipo de producto:</label>
                      <select name="tipo">
                        <option value="Queso" >Queso</option>
                            <option value="Yogurt" >Yogurt</option>
                            <option value="Otros" >Otros</option>
                           
                       </select> 
                     <label for="precio">Precio:</label>
                     <input type="number" name="precio" placeholder="Valor de producto" required min=0>
                     <label for="capacidad">Capacidad de producción:</label>
                     <input type="number" name="capacidad" placeholder="Capacidad de producción"  required min=0>                     
                     <label for="capacidad">Foto:</label>
                     <input type="file" id="file" name="file" required>
                     <label for="capacidad">Descripción:</label>
                     <input type="text" name="descripcion" placeholder="Descrición del producto"  required min=0>
                     <br/>
                       <input type="submit" value="Enviar Datos" id="btnsubmit" >
                     <br/>
                     <br/>
               </form>

    </div>

