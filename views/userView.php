<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
<?php
		while($posts = $statement->fetch())
			{
				echo'<div class="row test jumbotron">';
				echo'<div class="col-lg-12 viewPost">';
				echo'<h3 class="text-center title">Chapitre '. $posts["chapter"] . '</h3>';
				echo'<br>';
				echo'<h4 class="text-center">'. $posts["title"] . '</h4>';
				echo'<p>'. $posts['content'] .'</p>';
				echo'</div>';
				echo'<a class="btn btn-default return" href="#"><i class="fas fa-book-open"></i> Lire la suite</a>';
				echo'</div>';
				echo'<br>';
			}
?>
	<div class="row test">
		<a class="btn btn-primary return" href="../index.php"><i class="fas fa-arrow-left"></i> Retour</a>			
	</div>
		
<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>