<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
			<div class="container admin">
				<div class="row">			
					<h2>Supprimer un Billet </h2>
				</div>
				<div class="row">
					<br> 
					<form class="form" role="form" action="index.php?action=delete" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
						<p class="alert alert-warning">Etes vous sûr de vouloir supprimer ?</p>
						<div class="form-actions">
							<button type="submit" class="btn btn-warning"><i class="fas fa-pen-fancy"></i>Oui</button>
							<a class="btn btn-default" href="index.php?action=admin">Non</a>
						</div>
					</form>
				</div>
			</div>

<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>