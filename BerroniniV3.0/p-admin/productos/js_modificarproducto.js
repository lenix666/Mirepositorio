
$(document).ready(function(){

	$(".modificarproducto").click(function(){        
		var idproducto=$(this).parent('td').parent('tr').find('.idproducto').val();		
                var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
                var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
                var precio=$(this).parent('td').parent('tr').find('.precio').val();
                var tipo=$(this).parent('td').parent('tr').find('.tipo').val();   
                var file=$(this).parent('td').parent('tr').find('.file').val();   
                                
		$.post('./p-admin/productos/ejecutaeliminarmodificar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Idproducto:idproducto,
                        Nombre:nombre,
                        Descripcion:descripcion,
                        Precio:precio,
                        Tipo:tipo,
                        File:file
                        
		},function(e){
			alert(e);
		});
	});
        
        $(".eliminarproducto").click(function(){                   
		$.post('./p-admin/productos/ejecutaeliminarmodificar.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id')                        
		},function(e){
			alert(e);
		});
	});
        
        
        
        
});