<?php
	
	require 'model.php';

	if(!empty($_GET['id']))
	{

		$id = checkInput($_GET['id']);
	}

	$post = viewPost($id);
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
		<div class="row test">
			<div class="col-lg-12 view">
				<h3 class="text-center title"><?php echo'Chapitre ' . $post["chapter"];?></h3>
				<br>
				<h4 class="text-center"><?php echo'' . $post["title"];?></h4>
				<p><?php echo'' . $post["content"];?></p>
			</div>
		</div>
		<div class="row test">
			<a class="btn btn-primary return" href="admin.php"><i class="fas fa-arrow-left"></i> Retour</a>			
		</div>


	<!-- Les liaisons aux scripts --> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body> 
</html>