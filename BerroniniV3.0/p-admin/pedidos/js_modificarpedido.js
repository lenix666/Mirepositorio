
$(document).ready(function(){

	$(".modificarpedido").click(function(){        
		var estado=$(this).parent('td').parent('tr').find('.estado').val();
		
		$.post('./p-admin/pedidos/ejecutaeliminarmodificar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Estado:estado
		},function(e){
			alert(e);
		});
	});
});