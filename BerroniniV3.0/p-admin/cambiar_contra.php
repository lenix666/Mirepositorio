<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
            include '../recursos/php/conexiones/conexion.php';
            include 'update_admin.php';
    

             $a = new UpdateAdmin();
             
             
             if ($a -> ContraActual($_REQUEST['password']) == TRUE){
                 $a -> UpdatePass($_REQUEST['password2']);
                 echo"<script type=\"text/javascript\">alert('Contraseña actualizada correctamente'); window.location='../p_admin.php';</script>";  
             }else{
                 echo"<script type=\"text/javascript\">alert('La contraseña actual incorrecta'); window.location='../p_admin.php';</script>";  
             }
            
           