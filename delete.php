<?php
	
	require ('controller.php');
	controllerDeletePost();

	
?>

<!DOCTYPE html> 
<html lang="fr"> 
	<head> 
        <title>Blog de Jean Forteroche</title> 
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-it=no"> 
        <!-- Liaison au fichier css de Bootstrap --> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Liaison au fichier Font Awesome --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/styles.css">

       
	</head> 
	<body> 
			<div class="container admin">
				<div class="row">			
					<h2>Supprimer un Billet </h2>
				</div>
				<div class="row">
					<br> 
					<form class="form" role="form" action="delete.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
						<p class="alert alert-warning">Etes vous sûr de vouloir supprimer ?</p>
						<div class="form-actions">
							<button type="submit" class="btn btn-warning"><i class="fas fa-pen-fancy"></i>Oui</button>
							<a class="btn btn-default" href="admin.php">Non</a>
						</div>
					</form>
				</div>
			</div>

	<!-- Les liaisons aux scripts --> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body> 
</html>