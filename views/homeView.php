<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-3 text-center">
				<img src="images/livreblanc.png">
			</div>
			<div class="col-sm-12 col-lg-9">
				<h1>billet simple pour l'Alaska</h1>
			</div>
		</div>
		<div class="row central-img">
			<div class="col-ms-6 text-center message">
				<h2>Bienvenue</h2>
				<p>l’Ecrivain Jean Forteroche, est heureux de vous présenter son  blog  consacré à son dernier livre « Billet pour l’Alaska ».Chaque semaines venez découvrir un nouveau chapitre et , il ne tient qu’à vous grâce à vos commentaires de faire évoluer l’histoire… </p>
			</div>
		</div>
		<div class="row">
			<button class="btn btn-info">Accéder aux chapitres</button>
		</div>
		<div class="row">
			<p class="text-center">Jean Forteroche © Tous droits réservés – 2018 <a href="index.php?action=admin">Espace administration</a></p>
		</div>

	</div>	
<?php $page_content = ob_get_clean(); ?>
<?php require('template.php'); ?>