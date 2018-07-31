/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

	$('.menu12 li:has(ul)').click(function(e) {

		e.preventDefault();

		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();		
			
		}
		else
		{
			$('.menu12 li ul').slideUp();
			$('.menu12 li ').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();

		}

	});






$("#modificaradmin").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','block');        
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none'); 
        $('.info_admin').toggle('slow').css('display','none');
    }
    else {
       $('.ingresar_admin').toggle('slow').css('display','none');
    }
});



$("#perfilaad").click(function(){
    var a = true;
    if(a === true ) {        
        $('.info_admin').toggle('slow').css('display','block');         
        $('.ingresar_admin').toggle('slow').css('display','none');        
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.info_admin').toggle('slow').css('display','none');
    }
});






$("#ingresarproducto").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','block');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.ingresar_producto').toggle('slow').css('display','none');
    }
});

$("#buscarproducto").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none'); 
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','block');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.buscar_producto').toggle('slow').css('display','none');
    }
});

$("#modificarproducto").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none'); 
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','block');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.modificar_producto').toggle('slow').css('display','none');
    }
});

$("#eliminarproducto").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','block');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.eliminar_producto').toggle('slow').css('display','none');
    }
});


$("#ingresarcliente").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','block');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.ingresar_cliente').toggle('slow').css('display','none');
    }
});

$("#buscarcliente").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','block');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.buscar_cliente').toggle('slow').css('display','none');
    }
});


$("#modificarcliente").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');   
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','block');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.modificar_cliente').toggle('slow').css('display','none');
    }
});


$("#eliminarcliente").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','block');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.eliminar_cliete').toggle('slow').css('display','none');
    }
});

$("#verpedidos").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','block');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.ver_pedidos').toggle('slow').css('display','none');
    }
});

$("#reportclientes").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','block');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.reporte_clientes').toggle('slow').css('display','none');
    }
});


$("#reportproductos").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none');  
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','block');        
        $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
    else {
       $('.reporte_productos').toggle('slow').css('display','none'); 
    }
});

$("#reportpedidos").click(function(){
    var a = true;
    if(a === true ) {
        $('.ingresar_admin').toggle('slow').css('display','none'); 
        $('.info_admin').toggle('slow').css('display','none');
        $('.ingresar_producto').toggle('slow').css('display','none');
        $('.buscar_producto').toggle('slow').css('display','none');
        $('.modificar_producto').toggle('slow').css('display','none');
        $('.eliminar_producto').toggle('slow').css('display','none');
        $('.ingresar_cliente').toggle('slow').css('display','none');
        $('.buscar_cliente').toggle('slow').css('display','none');
        $('.modificar_cliente').toggle('slow').css('display','none');
        $('.eliminar_cliete').toggle('slow').css('display','none');
        $('.ver_pedidos').toggle('slow').css('display','none');
        $('.reporte_clientes').toggle('slow').css('display','none');
        $('.reporte_productos').toggle('slow').css('display','none');        
        $('.reporte_pedidos').toggle('slow').css('display','block');         
    }
    else {
       $('.reporte_pedidos').toggle('slow').css('display','none');         
    }
});


$("#modificar_info_cliente").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','block');                
        $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','none'); 
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','none'); 
        $('.reportepedidosp3').toggle('slow').css('display','none'); 
    }
    else {
       $('.modinfocli').toggle('slow').css('display','none');
    }
});

$("#info_").click(function(){
    var a = true;
    if(a === true ) {
        $('.modinfocli').toggle('slow').css('display','none');                
        $('.info').toggle('slow').css('display','block'); 
         $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','none'); 
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','none'); 
        $('.reportepedidosp3').toggle('slow').css('display','none');        
        
    }
    else {
       $('.info').toggle('slow').css('display','none');
    }
});



$("#contactaradmin").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','none');                
        $('.contactarseconadmin').toggle('slow').css('display','block'); 
        $('.reportepedidos').toggle('slow').css('display','none');
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','none'); 
        $('.reportepedidosp3').toggle('slow').css('display','none');  
    }
    else {
       $('.contactarseconadmin').toggle('slow').css('display','none'); 
    }
});



$("#generareportepedidos").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','none');                
        $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','block'); 
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','none'); 
        $('.reportepedidosp3').toggle('slow').css('display','none'); 
    }
    else {
        $('.reportepedidos').toggle('slow').css('display','none'); 

    }
});


$("#generareportepedidospendientes").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','none');                                        
        $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','none'); 
        $('.reportepedidosp').toggle('slow').css('display','none');
        $('.reportepedidosp1').toggle('slow').css('display','block');
        $('.reportepedidosp2').toggle('slow').css('display','none'); 
        $('.reportepedidosp3').toggle('slow').css('display','none'); 
    }
    else {
        $('.reportepedidosp1').toggle('slow').css('display','none'); 

    }
});



$("#generareportepedidoscancelados").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','none');                                        
        $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','none'); 
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','block'); 
        $('.reportepedidosp3').toggle('slow').css('display','none'); 
    }
    else {
        $('.reportepedidosp2').toggle('slow').css('display','none'); 

    }
});

$("#generareportepedidosconfirmados").click(function(){
    var a = true;
    if(a === true ) {
        $('.info').toggle('slow').css('display','none'); 
        $('.modinfocli').toggle('slow').css('display','none');                                        
        $('.contactarseconadmin').toggle('slow').css('display','none'); 
        $('.reportepedidos').toggle('slow').css('display','none'); 
        $('.reportepedidosp1').toggle('slow').css('display','none');
        $('.reportepedidosp2').toggle('slow').css('display','none');
        $('.reportepedidosp3').toggle('slow').css('display','block'); 
        
        
    }
    else {
        $('.reportepedidosp3').toggle('slow').css('display','none'); 

    }
});


});

