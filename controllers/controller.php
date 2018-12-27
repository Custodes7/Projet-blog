<?php
require 'model/model.php';

function controllerViewPost()
{
	$postManager = new PostManager(); 
	if(!empty($_GET['id']))
	{

		$id = $postManager->checkInput($_GET['id']);
	}

	$post = $postManager->viewPost($id);
	require'view/chapterView.php';
}

function controllerdeletePost()
{
	$postManager = new PostManager(); 
	if (!empty($_GET['id'])) 
	{
		$id = $postManager->checkInput($_GET['id']);
		require'view/deleteView.php';
	}
	
	if (!empty($_POST)) 
	{
		$id = $postManager->checkInput($_POST['id']);
		$postManager->deletePost($id);
		header("location: index.php?action=admin");
	}

}

function controllerInsertPost()
{
	$postManager = new PostManager(); 
	$titleError = $contentError = $title = $content = "";

	if(!empty($_POST))
	{
		$title        	= $postManager->checkInput($_POST['title']);
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
			$postManager->insertPost($title,$content);
		}

	}
	require'view/insertView.php';
}

function controllerUpdatePost()
{
	$postManager = new PostManager(); 
	if(!empty($_GET['id']))
	{
		$id = $postManager->checkInput($_GET['id']);
	}

	$titleError = $contentError = $title = $content = "";

	if(!empty($_POST))
	{
			$title        	= $postManager->checkInput($_POST['title']);
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
			$postManager->updatePost($title,$content,$id);
		}

		$post = $postManager->hydratePost($id);
		require'view/updateView.php';

	}
	else
	{
		$post = $postManager->hydratePost($id);
		require'view/updateView.php';
	}
}

