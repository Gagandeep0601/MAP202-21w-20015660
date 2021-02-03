<?php
session_start();
echo 'Authenticated user'
?>

<html>	
	<body>
		<p>
			Welcome <?php echo '<b><i><u>' .$_SESSION['username']. '</u></i></b>' ; ?> to your Homepage !
		</p>
	</body>
</html>