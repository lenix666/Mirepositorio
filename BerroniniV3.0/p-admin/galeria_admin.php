<style type="text/css" media="screen">
 
 #adminpublicar{
border-radius: 10px;
background-color: #848080;

padding: 10px 12px;
display: block;
padding-left: 10px;
width: 25%;
margin: auto;
margin-bottom: 25px;
 }

#adminpublicar #cambiar{
margin-bottom: 15px;
margin-top: 15px;
}


</style>

<div id="adminpublicar">

<form action="recursos/php/conexiones/publicarfoto.php" method="post"  enctype="multipart/form-data">
            <label for="foto" id="foto">AGREGAR FOTO A GALERIA</label>     
            <div id="cambiar">
                <input type="file"  name="imagen">
            </div>
            <input type="submit" value="SUBIR" id="btnpublicar" >                  
</form>  
</div>


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




