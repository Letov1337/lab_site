<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'bastep');
define('MYSQL_PASSWORD', '1973awaW!');
define('MYSQL_DB', 'bastep');

function db_connect(){
    try 
		{
			$link = new PDO('mysql:host=localhost; dbname=bastep; charset=utf8', 'bastep', '1973awaW!');   
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
    return $link; 
}
?>