/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

	//INICIAR SESION
	
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
        
      //REGISTRARSE

        $('a.signin-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
        
        
        //ESTE NO SABO
        //
        $('a.tipo-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
		//MOSTRAR DETALLE PRODUCTO        
        
        $('a.show-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask-show"></div>');
		$('#mask-show').fadeIn(300);
		
		return false;
	});
        
        //CERRAR DETALLE PRODUCTO
        
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .a-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
        
        $('a.close, #mask').live('click', function() { 
	  $('#mask , .b-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
        
        $('a.close, #mask').live('click', function() { 
	  $('#mask , .tipo-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
        
        $('a.close, #mask-show').live('click', function() { 
	  $('#mask-show , .mostrar').fadeOut(300 , function() {
		$('#mask-show').remove();  
	}); 
            
	return false;
	});
});

