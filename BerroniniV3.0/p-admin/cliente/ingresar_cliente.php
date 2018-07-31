<div id="formulario">
               
    
   <form action="./p-admin/cliente/ingresar_cliente_db.php" method="post" enctype="multipart/form-data">
             <label for="nombre">Nombre:</label>
             <input type="text" name="nombre" placeholder="Nombre para el nuevo cliente"  required >
                 <label for="cedula">Cédula:</label>
                 <input type="number" name="cedula" placeholder="Cedula del nuevo cliente" placeholder="<?php echo $cedulaidentidad ?> " min=0 required>
                 <label for="ciudad">Ciudad:</label>
                 <input type="text" name="ciudad" placeholder="Ciudad" required >
                 <label for="direccion">Dirección:</label>
                 <input type="text" name="direccion" placeholder="Dirección" required>
                 <label for="telefono">Teléfono:</label>
                 <input type="tel" name="telefono" placeholder="Teléfono"  max="10" minlength="9" required>   
                 <label for="correo">E-mail:</label> 
                 <input type="email" name="correo" placeholder="Correo Eléctronico" required>	
                 <label for="password">Contraseña:</label>
                 <input type="password" name="password1" placeholder="Contraseña" required >  
                 <input type="submit" value="Registrar Cliente" id="btnsubmit" >
                 
    </form>

</div>