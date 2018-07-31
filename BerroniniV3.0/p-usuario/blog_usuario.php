<?php 
    $publicaciones=$Con ->recuperarpublicaciones();

    while ($f= mysqli_fetch_array($publicaciones)) 
    {
?>
   
    <div class="publicacion">
        <figure>
            <div id="tittle">
             <figcaption><?php echo "$f[titulo]"?></figcaption>   
            </div>
            <img src="./recursos/img/publicaciones/<?php echo $f['foto']?>">
            <span>Fecha Publicación:<?php echo "$f[fecha]"?></span>    
            <article>
                <?php echo "$f[descripcion]"?>       
            </article>        
         </figure>
    </div>

    <?php
    }
?>