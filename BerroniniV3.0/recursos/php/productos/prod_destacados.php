
<?php 
    include("recursos/php/conexiones/recuperarproducto.php");
    $Con = new conexion();
?> 

<h2>Productos destacados</h2>
<div id="productos">
     <div class="producto_1">                                               
         <figure>
            <?php $prod=$Con ->recuperarProd('Queso'); ?>
            <a href="productos.php">
            <img src="recursos/img/productos/<?php echo $prod['foto']?>">
            <figcaption><?php echo "$prod[nombre]"?></figcaption>
            </a>
            <div class="acerca_producto_1"><?php echo "$prod[descripcion]"?></div>           
         </figure><br>
    </div>



    <div class="producto_2">                                                    
         <figure>
            <?php $prod=$Con ->recuperarProd('Yogurt'); ?>
            <a href="productos.php">
            <img src="recursos/img/productos/<?php echo $prod['foto']?>">
            <figcaption><?php echo "$prod[nombre]"?></figcaption>
            </a> 
            <div class="acerca_producto_2"><?php echo "$prod[descripcion]"?></div>          
         </figure>
    </div>


    <div class="producto_3">                                                
         <figure>
            <?php $prod=$Con ->recuperarProd('Varios'); ?>
            <a href="productos.php">
            <img src="recursos/img/productos/<?php echo $prod['foto']?>">
            <figcaption><?php echo "$prod[nombre]"?></figcaption>
            </a> 
            <div class="acerca_producto_3"><?php echo "$prod[descripcion]"?></div>          
         </figure>
    </div>
</div>    