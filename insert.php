<?php
	
	require 'database.php';

	$titleError = $contentError = $title = $content = "";

	if(!empty($_POST))
	{
		$title        	= checkInput($_POST['title']);
		$content 		= $_POST['content'];
		$isSuccess      = true;

		if (empty($title)) 
		{
			$titleError = 'Ce champ ne peut pas être vide';
			$isSuccess = false;
		}
		if (empty($content)) 
		{
			$descriptionError = 'Ce champ ne peut pas être vide';
			$isSuccess = false;
		}
		

		if ($isSuccess) 
		{
			$db = Database::connect();
			$statement = $db->prepare("INSERT INTO Posts (title,content) values(?,?)");
			$statement->execute(array($title,$content));
			Database::disconnect();
			header("location: admin.php");
		}

	}

	function checkInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		
	}
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
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
            selector: '#content'
          });
        </script>
       
	</head> 
	<body> 
		<div class="container">
			<div class="row">			
					<h2> Ajouter un Billet </h2>
			</div>
			<div class="row">
					<br>
					<form class="form" role="form" action="insert.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="title" class="form-control" id="title" placeholder="Titre" value="<?php echo $title; ?>">
							<span class="help-inline"><?php echo $titleError; ?></span>
						</div>
						<div class="form-group">
							<textarea name="content" id="content"></textarea>
						</div>
						<br>
						<div class="form-actions">
							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Ajouter</button>
							<a class="btn btn-primary" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
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