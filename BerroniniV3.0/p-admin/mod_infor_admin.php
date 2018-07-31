
<div id="formulario">

  <?php                      
        
            $cedulaidentidad=$datos[0]['Cedula'];
            $nombre_u=$datos[0]['Nombre'];
            $correo_u=$datos[0]['Correo'];
            $telefono_u=$datos[0]['Telefono'];  
            $ciudad_u=$datos[0]['Ciudad'];
            $direccion_u=$datos[0]['Direccion']; 
            $foto_u=$datos[0]['Foto']; 
                    
        ?>

   <hgroup>
      <h1>Modificar datos Administrador</h1>
    </hgroup>
    <form action="./p-admin/modificar_datos.php" method="post" enctype="multipart/form-data">
             <label for="nombre">Nombre:</label>
             <input type="text" name="nombre" value="<?php echo $nombre_u ?>"  required >
                 <label for="cedula">Cédula:</label>
                 <input type="number" name="cedula" readonly="readonly " placeholder="<?php echo $cedulaidentidad ?> " min=0 required>
                 <label for="ciudad">Ciudad:</label>
                 <input type="text" name="ciudad" value="<?php echo $ciudad_u ?>" required >
                 <label for="direccion">Dirección:</label>
                 <input type="text" name="direccion" value="<?php echo $direccion_u ?>"  required>
                 <label for="telefono">Teléfono:</label>
                 <input type="tel" name="telefono" value="<?php echo $telefono_u ?>"  min="9" max="10" required>   
                 <label for="correo">E-mail:</label> 
                 <input type="email" name="correo" value="<?php echo  $correo_u ?>" required>						 						
                 <input type="submit" value="Cambiar datos" id="btnsubmit" >
    </form>
    <br>
    <form action="./p-admin/cambiar_contra.php" method="post" enctype="multipart/form-data">
                 <label for="password">Contraseña Actual:</label>
                 <input type="password" name="password" placeholder="Escriba su nueva contraseña" required >  
                <label for="password2">Nueva Contraseña:</label>
                 <input type="password" name="password2" placeholder="Repita su nueva contraseña" required >                                                                                              
                 <br>
                   <input type="submit" value="Cambiar contraseña" id="btnsubmit" >
                 <br>
           <br>
  </form>
  
</div>				  



