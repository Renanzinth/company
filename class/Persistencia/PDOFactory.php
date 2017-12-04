<?php

/**
* 
*/
class PDOFactory
{
	private static $pdo;

	public static function getConnection()
	{
		if(!static::$pdo) {
			static::$pdo = new PDO('mysql:host=localhost;dbname=company', 'root', '');
		}

		return static::$pdo;
	}
}