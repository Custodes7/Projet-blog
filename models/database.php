<?php

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

