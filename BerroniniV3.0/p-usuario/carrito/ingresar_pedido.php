<?php
                
                session_start();                
		        include '../../recursos/php/conexiones/recuperarproducto.php';
                $ing = new conexion();
                $ing -> crearpedidos();
                                                   
                
                unset($_SESSION['carrito']);
                echo"<script type=\"text/javascript\">alert('Pedido realizado correctamente a la confirmación de un administrador, "
                . "puede revisar los detalles del pedido en su correo eléctronico o en su perfil de usuario'); window.location='../../index.php';</script>"; 
                
                
		
		
?>
		


