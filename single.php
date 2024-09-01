<?php 
	$noticiasurl = $url[1];
	$readnoticias = read('php_noticias',"WHERE url = '$noticiasurl'");
	if(!$readnoticias){
		header('Location: '.URL.'/404');	
	}else{
		foreach($readnoticias as $not);
		top($not['id']);	
	}
?>

<div class="single">
   <div class="tituloSingle"><?php echo $not['titulo'];?></div>
 	
    <?php echo stripslashes($not['descricao']);?>
                
<div class="tags">
    <strong>Tags:</strong> <?php echo $not['tags'];?>
</div><!--/tags-->
</div><!--/single-->
               
<?php require("../inc/sidebar-pg.php");?>
        