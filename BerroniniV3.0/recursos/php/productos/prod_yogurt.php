<?php 

   $prodyogurt=$Con ->recuperartodos('Yogurt');

    while ($f= mysqli_fetch_array($prodyogurt)) 
    {
        $var=$f['idproducto'];
    
    ?>
    <div class="producto">
        <a href="<?php echo "#".$var?>" class="show-window">
        <figure>
            <img src="recursos/img/productos/<?php echo $f['foto'] ?>">
            <figcaption><?php echo "$f[nombre]"?></figcaption>        
         </figure>
        </a><br>
    </div>

    <div id="<?php echo $var?>" class="mostrar">
        <h3><?php echo "$f[nombre]"?> </h3>
        <a href="#" class="close"><img src="recursos/img/general/close.png" class="btn_gilson" title="Cerrar Ventana" alt="Close" /></a>
        <img src="recursos/img/productos/<?php echo $f['foto']?>">
        <div>
            <span>
            <?php echo "$f[descripcion]"?>
            </span><br>
            <span>Precio: $<?php echo $f['precio']?></span>            
        </div><br>
        <form action="carritocompras.php?id=<?php echo $f['idproducto']?>" method="post">
        <span>Cantidad:                    
            <input type="number" min="1" max="1000" step="1" value="1" class="cantidad" name="cantidadpro">
        </span>        
        <input type="submit" value="Añadir a Carrito" id="btnsubmit" >
        </form>
    </div>
    <?php
    }
?>
