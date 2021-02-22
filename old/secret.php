<html>	
	<body>
		<p>
			 <?php 
			    session_start();
                require_once('header.php');
                require_once('footer.php');
			    if (!$_SESSION['isAuthenticated']) 
				{
			   header("Location: login.php");	
                }
                else
				{
				echo 'Welcome <b><i><u>' .$_SESSION['username']. '</u></i></b> to your Homepage ! ';
				}
			 ?> 
		</p>
	</body>
</html>