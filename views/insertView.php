<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
		<div class="container">
			<div class="row">			
					<h2> Ajouter un Billet </h2>
			</div>
			<div class="row">
					<br>
					<form class="form" role="form" action="index.php?action=insert" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<h3>Titre</h3>
							<input type="text" name="title" class="form-control" id="title" placeholder="Titre" value="<?php echo $title; ?>">
							<span class="help-inline"><?php echo $titleError; ?></span>
						</div>
						<div class="form-group">
							<h3>Contenu</h3>
							<textarea name="content" id="content"></textarea>
							<span class="help-inline"><?php echo $contentError; ?></span>
						</div>
						<br>
						<div class="form-actions">
							<button type="submit" class="btn btn-success"><i class="fas fa-pen-fancy"></i>Ajouter</button>
							<a class="btn btn-primary" href="index.php?action=admin"><i class="fas fa-arrow-left"></i> Retour</a>
						</div>
					</form>
				</div>
		</div>

<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>