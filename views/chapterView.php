<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>

		<div class="row test">
			<div class="col-lg-12 view">
				<h3 class="text-center title"><?php echo'Chapitre ' . $post["chapter"];?></h3>
				<br>
				<h4 class="text-center"><?php echo'' . $post["title"];?></h4>
				<p><?php echo'' . $post["content"];?></p>
			</div>
		</div>
		<div class="row test">
			<a class="btn btn-primary return" href="index.php?action=admin"><i class="fas fa-arrow-left"></i> Retour</a>			
		</div>
<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>
