<?php
session_start();

   class user
   {
	 public function userdata()
	 {
	require_once('db.php');
    $username = $_REQUEST['uname'];
	
	$db = new db();
	$conn = $db->db_connect();
	$query = "SELECT * FROM login WHERE username = :username ";
	$stmt = $conn->prepare($query);
	$stmt->bindParam(':username',$username);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
	 }
  }

?>