<div class="well">
<h4>Noticias</h4>
<?php
$long_descripcion=100; 
$num_noticias=5; 
$n=0; 
$noticias = simplexml_load_file($fuenteRSS); 
foreach ($noticias as $noticia) {  
	foreach($noticia as $reg){ 
		if($reg->title!=NULL && $reg->title!='' && $reg->description!=NULL && $reg->description!='' && $n<$num_noticias){
			$linkURL= $reg->link;
			$titulo= $reg->title;
			$imagen= $reg->enclosure['url'];
			$contenido= $reg->description;
			?> 
			<div class="media p-l-5">
                <div class="pull-left">
                    <img style="border-radius:5px;margin-top:15px;" width="60" src="<?php echo $imagen; ?>" alt="">
                </div>
                <div class="media-body">
                    <h5><a href="<?php echo $linkURL; ?>" target="_blank"><?php echo $titulo; ?></a></h5>
                    <p><?php echo recortar_texto($contenido,100); ?></p>
                   
                </div>
            </div>

<?php
		$n ++;
		} 
	} 
}
?>
</div>