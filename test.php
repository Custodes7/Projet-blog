<?php
function test()
{
	require 'model/model.php';
	$postManager = new PostManager(); 
	$statement = $postManager->chapterNumber();
	return $statement;
}
$result = test();
echo $result;

