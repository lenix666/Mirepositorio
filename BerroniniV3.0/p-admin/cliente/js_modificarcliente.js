
$(document).ready(function(){

	$(".modificarclientep").click(function(){        
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();		
                var cedula=$(this).parent('td').parent('tr').find('.cedula').val();
                var ciudad=$(this).parent('td').parent('tr').find('.ciudad').val();
                var direccion=$(this).parent('td').parent('tr').find('.direccion').val();
                var telefono=$(this).parent('td').parent('tr').find('.telefono').val();   
                var correo=$(this).parent('td').parent('tr').find('.correo').val(); 
                var password=$(this).parent('td').parent('tr').find('.password').val(); 
                                
		$.post('./p-admin/cliente/ejecutaeliminarmodificar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),			
                        Nombre:nombre,
                        Cedula:cedula,
                        Ciudad:ciudad,
                        Direccion:direccion,
                        Telefono:telefono,
                        Correo:correo,
                        Password:password
                        
		},function(e){
			alert(e);
		});
	});
        
        $(".eliminarclientep").click(function(){                   
		$.post('./p-admin/cliente/ejecutaeliminarmodificar.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id')                        
		},function(e){
			alert(e);
		});
	});
        
        
        
        
});