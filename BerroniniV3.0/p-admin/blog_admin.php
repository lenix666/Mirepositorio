<style type="text/css" media="screen">
 
 #adminpublicar{
border-radius: 10px;
background-color: #333333;

padding: 10px 12px;
display: block;
padding-left: 10px;
width: 25%;
margin: auto;
margin-bottom: 25px;
 }

#adminpublicar:hover{
 background-color:#0033ff;
}

#adminpublicar a{
 text-decoration: none;
 color: white ;
 }
</style>


<div id="adminpublicar">
<a href="publicar.php" title="publicar">PUBLICAR</a>   
</div>

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