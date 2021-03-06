<?php
require'controller/database.php'; 
class PostManager
{

public function checkInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

public function chapterNumber()
{
	$db = Database::connect();
	$statement = $db->query('SELECT max(chapter) AS maxchapter FROM Posts');
	while($posts = $statement->fetch())
			{
				$result = $posts["maxchapter"]+1;
			}
	Database::disconnect();
	return $result;
}

public function adminTable()
{
	$db = Database::connect();
	$statement = $db->query('SELECT Posts.id, Posts.chapter, Posts.title, Posts.date
							FROM Posts 
							ORDER BY Posts.date DESC');
	Database::disconnect();
	return $statement;
}

public function listPost()
{
	$db = Database::connect();
	$statement = $db->query('SELECT Posts.id, Posts.chapter, Posts.title, Posts.date, Posts.content
							FROM Posts 
							ORDER BY Posts.date DESC');
	Database::disconnect();
	return $statement;
}						

public function viewPost($id)
{

	$db = Database::connect();
	$statement = $db->prepare("SELECT Posts.id, Posts.title,Posts.chapter, Posts.content
							FROM Posts 
							WHERE Posts.id = ?");

	$statement->execute(array($id));
	$post = $statement->fetch();
	Database::disconnect();
	return $post;

}

public function deletePost($id)
{

	$db = Database::connect();
	$statement = $db->prepare("DELETE FROM Posts WHERE id = ?");
	$statement->execute(array($id));
	Database::disconnect();
}

public function insertPost($title,$content,$chapter)
{
	$db = Database::connect();
	$statement = $db->prepare("INSERT INTO Posts (title,content,chapter,date) values(?,?,?,now())");
	$statement->execute(array($title,$content,$chapter));
	Database::disconnect();
	header("location: index.php?action=admin");
}

public function updatePost($title,$content,$id)
{
	$db = Database::connect();
	$statement = $db->prepare("UPDATE Posts SET title = ?, content = ? WHERE id = ?");
	$statement->execute(array($title,$content,$id));
	Database::disconnect();
	header("location: index.php?action=admin");
}

public function hydratePost($id)
{
	$db = Database::connect();
		$statement = $db->prepare("SELECT * FROM Posts WHERE id = ?");
		$statement->execute(array($id));
		$posts = $statement->fetch();
		Database::disconnect();
		return $posts;
}

}
