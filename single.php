<?php 
ob_start();
session_start();
require("../config/config.php");
require("../config/crud.php");
require("../config/funcoes.php");
//contavisitas('600');
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Connect News - Projeto final curso PHP - Luciano Augusto</title>
<meta name="title" content="Título!">
<meta name="description" content="Descrição">
<meta name="keywords" content="Palavras chaves">
<meta name="author" content="Autor do site">   
<meta name="url" content="url do site"> 
<meta name="language" content="pt-br"> 
<meta name="robots" content="INDEX,FOLLOW">
<?php require("inc/func_head.php");?>
</head>

<body>
    <div id="box">
     <?php require("inc/header.php");?> 

     <?php 
	$noticiasurl = $_GET['pag'];
	$readnoticias = read('php_noticias',"WHERE id = '$noticiasurl'");
	foreach($readnoticias as $not) {
		
?>
        <div id="content">       
		    <img src="midias/uploads/noticias/<?php echo $not['fotopost'];?>" style="max-width: 100%;"/>

		    <?php require("inc/sidebar.php");?>

<div class="single" style="width: 700px; text-align: justify;">

   <div class="tituloSingle"><?php echo $not['titulo'];?></div>
   
   <?php echo stripslashes($not['descricao']);?>
                
	<div class="tags" style="width: 680px;">
	    <strong>Tags:</strong> <?php echo $not['tags'];?>
	</div><!--/tags-->
</div><!--/single-->

        
                
        	<?php require("inc/footer.php");?> 
        </div>
    </div><!--/box-->


<?php 
}
ob_end_flush();
?>
</body>
</html>