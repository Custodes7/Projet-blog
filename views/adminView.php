<?php $page_title = 'Blog de Jean Forteroche' ?>
<?php ob_start(); ?>
	<div class="container admin">
		<div class="row">
			<h3><strong>Liste des Billets </strong><a href="index.php?action=insert" class="btn btn-success btn-lg"><i class="fas fa-plus"></i> Ajouter</a></h3>

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Chapitre</th>
						<th>Titre</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($posts = $statement->fetch())
					{
						echo'<tr>';
						echo'<td>' . $posts['chapter'] . '</td>';
						echo'<td>' . $posts['title'] . '</td>';
						echo'<td>' . $posts['date'] . '</td>';
						echo'<td width=400>';
						echo'<a class="btn btn-default" href="index.php?id=' . $posts['id'].'&action=view"><i class="far fa-eye"></i> Voir</a>';
						echo ' ';
						echo'<a class="btn btn-primary" href="index.php?id=' . $posts['id'] .'&action=update"><i class="fas fa-pen-fancy"></i> Modifier</a>'; 
						echo ' ';
						echo'<a class="btn btn-danger" href="index.php?id=' . $posts['id'] .'&action=delete"><i class="fas fa-trash-alt"></i> Supprimer</a>'; 
						echo'</td>';
						echo'</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn btn-primary" href="view/homeView.php"><i class="fas fa-arrow-left"></i> Retour</a>
		</div>
	</div>
<?php $page_content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
