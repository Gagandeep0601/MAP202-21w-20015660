<?php
session_start();
$_SESSION['username'] = $_REQUEST['uname'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	require_once('user.php');
	$user = new user();
	$userdata = $user->userdata();
	require_once('header.php');
	require_once('footer.php');
	die;    
}	
?>
<html>
	<body>
		<?php require_once('login.html'); ?>
	</body>
</html>
	
