<?php
function listPost(){
	$db = Database::connect();
	$statement = $db->query('SELECT Posts.id, Posts.chapter, Posts.title, Posts.date, Posts.content
							FROM Posts 
							ORDER BY Posts.date DESC');
	while($posts = $statement->fetch())
					{
						echo'<div class="row test jumbotron">';
						echo'<div class="col-lg-12 view">';
						echo'<h3 class="text-center title">Chapitre '. $posts["chapter"] . '</h3>';
						echo'<br>';
						echo'<h4 class="text-center">'. $posts["title"] . '</h4>';
						echo'<p>'. $posts["content"].'</p>';
						echo'</div>';
						echo'</div>';
						echo'<br>';
					}

					Database::disconnect();
}					
?>
<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
<?php listPost(); ?>
	<div class="row test">
		<a class="btn btn-primary return" href="../index.php"><i class="fas fa-arrow-left"></i> Retour</a>			
	</div>
		
<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>