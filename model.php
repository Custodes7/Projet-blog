<?php

function viewPost($id)
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

function deletePost($id)
{

	$db = Database::connect();
	$statement = $db->prepare("DELETE FROM Posts WHERE id = ?");
	$statement->execute(array($id));
	Database::disconnect();
	header("location: admin.php");
}

function checkInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

function insertPost($title,$content)
{
	$db = Database::connect();
	$statement = $db->prepare("INSERT INTO Posts (title,content,date) values(?,?,now())");
	$statement->execute(array($title,$content));
	Database::disconnect();
	header("location: admin.php");
}

function updatePost($title,$content,$id)
{
	$db = Database::connect();
	$statement = $db->prepare("UPDATE Posts SET title = ?, content = ? WHERE id = ?");
	$statement->execute(array($title,$content,$id));
	Database::disconnect();
	header("location: admin.php");
}

function hydratePost($id)
{
	$db = Database::connect();
		$statement = $db->prepare("SELECT * FROM Posts WHERE id = ?");
		$statement->execute(array($id));
		$posts = $statement->fetch();
		Database::disconnect();
		return $posts;
}


class Database
{
	private static $dbHost = "db761841195.hosting-data.io";
	private static $dbName = "db761841195";
	private static $dbUser = "dbo761841195";
	private static $dbUserPassword = "Custodes_7";
	private static $connection = null;

	public static function connect()
	{
		try
		{
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
		}
		catch(PDOException $e)
		{
			die($e->getMessage);
		}
		return self::$connection;
	}

	public static function disconnect()
	{
		self::$connection = null;
	}
}
