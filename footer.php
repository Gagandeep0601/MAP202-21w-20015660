<?php
session_start();
require_once('header.php');
if ($_SESSION['failedAttempts'])
{
echo  '<strong>You have '.$_SESSION['failedAttempts'].' failed Attempts!</strong>';
		unset($_SESSION['isAuthenticated']);

}

	
?>