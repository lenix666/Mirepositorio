$(document).ready(function() {               
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){                    
			if(e.keyCode==13){                            
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.productocarrito').find('.subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('p-usuario/carrito/modificar_datos_carrito.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+e);
				});
			}
		}
	});
        
        
        
  $(".eliminar").click(function(e)
  {
	e.preventDefault();
	var id=$(this).attr('data-id');
	$(this).parentsUntil('.productocarrito').remove();
	$.post('p-usuario/carrito/eliminar_productos_carrito.php',{
		Id:id		
	},function(a)
	{
            location.href="carritocompras.php";
		if(a=='0')
		{
			location.href="carritocompras.php";
		}
	});
  });
	
});
