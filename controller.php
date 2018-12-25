<?php
require 'model.php';

function controllerViewPost()
{
	if(!empty($_GET['id']))
	{

		$id = checkInput($_GET['id']);
	}

	$post = viewPost($id);
	return $post;
}

function controllerdeletePost()
{
	if (!empty($_GET['id'])) 
	{
		$id = checkInput($_GET['id']);
	}
	
	if (!empty($_POST)) 
	{
		$id = checkInput($_POST['id']);
		deletePost($id);
	}
}

function controllerInsertPost()
{
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
			$contentError = 'Ce champ ne peut pas être vide';
			$isSuccess = false;
		}
		

		if ($isSuccess) 
		{
			insertPost($title,$content);
		}

	}
}

function controllerUpdatePost()
{
	if(!empty($_GET['id']))
	{
		$id = checkInput($_GET['id']);
	}

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
			$contentError = 'Ce champ ne peut pas être vide';
			$isSuccess = false;
		}
		

		if ($isSuccess) 
		{
			updatePost($title,$content,$id);
		}

	}
	else
	{
		$posts    = hydratePost($id);
		return $posts;
	}
}

