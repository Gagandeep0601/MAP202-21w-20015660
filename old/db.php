<?php
session_start();   

class db
{   
	public function db_connect()
	{
    $dbhost = 'remotemysql.com';
    $dbname = 'IKTgBdKMlf';
    $dbuser = 'IKTgBdKMlf';
    $dbpass = 'YBpheiPa9T';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	return $conn;
   }
}	

?>