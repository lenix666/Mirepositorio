
<div class="container">                    
<div class="post">        
    <div class="btn">
                    <a href="#a-box" class="login-window">Ingresar</a>
                    <a href="#b-box" class="signin-window">Registrarse</a>

    </div>
</div>

<div id="a-box" class="a-popup">
<a href="#" class="close"><img src="recursos/img/general/close.png" class="btn_close" title="Cerrar Ventana" alt="Close" /></a>                                     
    <div id="logo-sesion">
              
                <img src="recursos/img/general/logo.png" alt="Logo de la Empresa" id="logo_login"> 
                
    </div> 

    <div id="cajas-login">
    <div id="titulo_login">
                <h3>Ingreso de Usuario</h3>                
    </div>   
    <form method="POST" action="return false" onsubmit="return false">        
        <label>Usuario:</label><input type="text" name="user" id="user" value="" placeholder="Usuario" required>
        <label>Contraseña:</label><input type="password" name="pass" id="pass" value="" placeholder="Password" required>
        <p><button class="button" onclick="Validar_Ingreso(document.getElementById('user').value,document.getElementById('pass').value);">Ingresar</button></p>
    </form>

    </div>        
        
       
 
        <div id="resultadol"></div>
        </div>                                       
    
    <script src="recursos/js/js_validarsession.js" type="text/javascript"></script> 

<div id="b-box" class="b-popup">
<a href="#" class="close"><img src="recursos/img/general/close.png" class="btn_close" title="Cerrar Ventana" alt="Close" /></a>                                     
    <div id="logo-sesion">
              
                <img src="recursos/img/general/logo.png" alt="Logo de la Empresa" id="logo_login"> 
                
    </div> 

    
        
        <!-- Registro-->
        
 <div id="cajas-registro">
    <div id="titulo_login">
                <h3>Registro de Usuario</h3>                
    </div>   
    <form method="POST" action="return false" onsubmit="return false">        
        <label>Nombre:</label><input type="text" name="nombrecompleto" id="fnombrecompleto" value="" placeholder="Nombre" required maxlength="30">                             
        <label>Cédula:</label><input type="text" name="cedula" id="fcedula" value="" placeholder="Cédula" required maxlength="10">        
        <label>Ciudad: </label><select id="fciudad" ><option></option><option>Quito</option><option>Latacunga</option><option>Riobamba</option><option>Cuenca</option>
        <option>Ambato</option><option>Manta</option><option>Santo Domingo</option></select>
        <label>Dirección:</label><input type="text" name="direccion" id="fdireccion" value="" placeholder="Dirección" required maxlength="100">
        <label>Teléfono:</label><input type="tel" name="telefono" id="ftelefono" value="" placeholder="Teléfono" required maxlength="10">
        <label>Correo Electrónico:</label><input type="text" name="correo" id="fcorreo" value="" placeholder="Correo Electrónico" required maxlength="30">
        <label>Contraseña:</label><input type="password" name="password" id="fpassword" value="" placeholder="Contraseña" required maxlength="30">
        <label>Repetir Contraseña:</label><input type="password" name="cpassword" id="fcpassword" value="" placeholder="Contraseña" required maxlength="30">
        <p><button class="button" onclick="Validar_Registro(
                    document.getElementById('fnombrecompleto').value, 
                    document.getElementById('fcedula').value,
                    document.getElementById('fciudad').value,
                    document.getElementById('fdireccion').value,
                    document.getElementById('ftelefono').value,
                    document.getElementById('fcorreo').value,
                    document.getElementById('fpassword').value,
                    document.getElementById('fcpassword').value
                    );">Registrarse</button></p>
    </form>
     
     
</div> 
        <div id="resultador"></div>
        </div>    
    
       <script src="recursos/js/js_sesion.js"></script>  
       <script src="recursos/js/js_validarsession.js" type="text/javascript"></script> 
        
   </div>  