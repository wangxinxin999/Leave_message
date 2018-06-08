<?php
header('content-type:text/html;charset=utf-8');
class DB
{
	
	private static $dbcon;

	private function __construct()
	{
		
	}

	private function __clone()
	{

	}

	public static function getInstance()
	{
		if(self::$dbcon == false){
			self::$dbcon = new DB();
		}

		return self::$dbcon;
	}

	public static function pdoContent()
	{
		return new \PDO('mysql:host=127.0.0.1;dbname=xx_test_tp;', 'root', 'root');
	} 
	
}