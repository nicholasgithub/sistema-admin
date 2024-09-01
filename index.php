<?php 
ob_start();
session_start();
require("config/config.php");
require("config/crud.php");
require("config/funcoes.php");
//contavisitas('600');
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Connect News - Projeto final curso PHP - Luciano Augusto</title>
<meta name="viewport"       content="width=device-width, initial-scale=1.0">
<meta name="title"          content="Título!">
<meta name="description"    content="Descrição">
<meta name="keywords"       content="Palavras chaves">
<meta name="author"         content="Autor do site">   
<meta name="url"            content="url do site"> 
<meta name="language"       content="pt-br"> 
<meta name="robots"         content="INDEX,FOLLOW">
<?php require("../portalnoticias/site/inc/func_head.php");?>
</head>

<body>
    <div id="box">
     <?php require("../portalnoticias/site/inc/header.php");?> 
     <?php require("../portalnoticias/site/inc/slide.php");?>

        <div id="content">
            <?php
                require ('../portalnoticias/site/inc/home.php');
                require ('../portalnoticias/site/inc/sidebar.php');
                require ('../portalnoticias/site/inc/blocos.php');
            ?>
                
        	<?php require("../portalnoticias/site/inc/footer.php");?> 
        </div>
    </div><!--/box-->


<?php 
ob_end_flush();
?>
</body>
</html>