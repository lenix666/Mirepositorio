 function Validar_Ingreso(user, pass)
{
    
            $.ajax({
                url: "recursos/php/conexiones/verificar.php",
                type: "POST",
                data: "Email="+user+"&Password="+pass,
                success: function(data){
                $('#resultadol').html(data)
                }       
            });
}


 function Validar_Registro(fnombrecompleto, fcedula ,fciudad, fdireccion ,ftelefono ,fcorreo ,fpassword ,fcpassword)
{        
    
            $.ajax({
                url: "recursos/php/conexiones/registro.php",
                type: "POST",
                data: "nombrecompleto="+fnombrecompleto+"&cedula="+fcedula+"&ciudad="+fciudad+
                        "&direccion="+fdireccion+"&telefono="+ftelefono+
                        "&correo="+fcorreo+"&password="+fpassword+"&cpassword="+fcpassword,                
                success: function(data){
                $('#resultador').html(data)
                
                }       
            });
}
