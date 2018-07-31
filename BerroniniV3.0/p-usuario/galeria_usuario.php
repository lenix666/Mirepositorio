<div id="galeria">
        <div id="galeria_imagen">
        <img id="imgGaleria" src="recursos/img/galeria/1.jpg" />
        </div>
        <div id="galeria_miniaturas">
        
        <?php 
        $fotosgaleria=$Con ->recuperarfotosgaleria();
        while ($f= mysqli_fetch_array($fotosgaleria)) 
        {
        ?>       
<img class="miniatura" onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="recursos/img/galeria/<?php echo $f['nombre'] ?>" /> 
    <?php
        }
    ?>
        </div>
</div>