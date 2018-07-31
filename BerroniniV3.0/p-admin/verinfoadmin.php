<style>
    #formulario form{
        display: inline-block;        
    }
    #formulario .infor1{
        
        width: 60%;
        display: inline-block;
    }
    #formulario p{
        display: inline-block;
        width: 45%;
        text-align: left;
        font-size: 18px;
        font-family: serif;
        
    }
     #formulario .foto_p{
        vertical-align: top;
        width: 30%;
    }
    
</style>

<div id="formulario" >
   <hgroup>
      <h1>MI PERFIL</h1>
    </hgroup>
       <form class="infor1">
                 
        <?php                      
        
            $cedulaidentidad=$datos[0]['Cedula'];
            $nombre_u=$datos[0]['Nombre'];
            $correo_u=$datos[0]['Correo'];
            $telefono_u=$datos[0]['Telefono'];  
            $ciudad_u=$datos[0]['Ciudad'];
            $direccion_u=$datos[0]['Direccion']; 
            $foto_u=$datos[0]['Foto']; 
                    
        ?>
           <h2>Datos de Usuario</h2>
           <br><br>
           <p for="nombre">Nombre Completo:</p> <p class="inf" ><?php echo $nombre_u; ?></p>
           <p for="nombre">Correo Electrónico:</p> <p class="inf" ><?php echo $correo_u; ?></p>
           <p for="nombre">Cedula de identidad:</p> <p class="inf" ><?php echo $cedulaidentidad; ?></p>   
           <p for="nombre">Teléfono:</p> <p class="inf" ><?php echo $telefono_u; ?></p>
           <p for="nombre">Ciudad:</p> <p class="inf" ><?php echo $ciudad_u; ?></p>
           <p for="nombre">Dirección:</p> <p class="inf" ><?php echo $direccion_u; ?></p>
           </form>
    <form class="foto_p">
        
        <h2>Foto Perfil </h2>    

          <img src="./recursos/img/fotosperfil/<?php echo $foto_u?>">
        <br><br><br><br>
    </form>
    <br><br><br><br><br><br><br>

</div>	
