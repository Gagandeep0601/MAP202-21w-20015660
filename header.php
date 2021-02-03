<?php
	session_start();
    if (password_verify($_REQUEST[password], $userdata[0]['password'])) 
	{
		$_SESSION['isAuthenticated'] =1;
		unset($_SESSION['failedAttempts']);
		header("Location: secret.php");

	} 
	else 
	{
		if ($_SESSION['failedAttempts']) 
		{
			$_SESSION['failedAttempts']++;
		} 
		else 
		{
			$_SESSION['failedAttempts'] = 1;
		}
	}

    
?>
