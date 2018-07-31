<?php
            session_start();
            if(isset($_SESSION['usuario'])){ //Determinamos si una variable/sesion está definida y no es NULL
                unset($_SESSION['usuario']);
                header("Location: ../../../index.php");            
            }
            
            if(isset($_SESSION['administrador'])){ //Determinamos si una variable/sesion está definida y no es NULL
                unset($_SESSION['administrador']); //destruyo la variable especificada
                header("Location: ../../../index.php");            
            }
            
?>