<?php
session_start();
if ($_SESSION['failedAttempts']) {
echo  '<strong>You have '.$_SESSION['failedAttempts'].' failed Attempts!</strong>';
}

	
?>