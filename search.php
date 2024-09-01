<?php 
ob_start();
session_start();
require("../config/config.php");
require("../config/crud.php");
require("../config/funcoes.php");

$pesquisa = $_GET['pes'];
$pesquisa = str_replace('-',' ',$pesquisa);

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
<?php 
require ("../inc/func_head.php");?>
</head>

<body>
    <div id="box">
     <?php require("../site/inc/header.php");?> 
<div class="resultado">
        
        	<div class="tituloSingle">Você pesquisou por: <strong> <?php echo strtoupper($pesquisa);?></strong></div>
			
            <ul class="listagemPe">
            	<?php 
					$readPesquisa = read('php_noticias', "WHERE status = '1' AND (titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%')
					ORDER BY data DESC");
					
					echo '<p>Sua pesquisa retornou '.count($readPesquisa).' resultados</p>';
					if(count($readPesquisa) <=0){
						echo '<h2>Desculpe, sua pesquisa não reternou nenhum resultado!</h2>';	
					}else{
						foreach($readPesquisa as $search):
							$link = URL.'/site/single.php?pag='.$search['id'];
							echo '<li>';
								echo ' <a href="'.URL.'/site/single.php?pag='.$search['id'].'">'.$search['titulo'].'</a>';
								echo '<p>'.resumos($search['descricao'], $palavras = '220', $link ).'</p>';
							echo '</li>';
						endforeach;	
					}
				?>	
        </ul><!--/Resultado da pesquisa-->
                        
</div><!--/Resultado-->
               
<?php require("../site/inc/sidebar-paginas.php");?>
        
<?php require("../site/inc/footer.php");?> 
        </div>
    </div><!--/box-->


<?php 

ob_end_flush();
?>
</body>
</html>