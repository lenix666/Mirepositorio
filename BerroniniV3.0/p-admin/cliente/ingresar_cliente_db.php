<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../recursos/php/conexiones/conexion.php';
    include '../update_admin.php';
    
    $ing = new UpdateAdmin();
    
    
    
    $ing -> RegistraCliente($_REQUEST['nombre'],$_REQUEST['cedula'],$_REQUEST['ciudad'],$_REQUEST['direccion'],
           $_REQUEST['telefono'],$_REQUEST['correo'],$_REQUEST['password1']);
    