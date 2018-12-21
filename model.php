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

function checkInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

?>