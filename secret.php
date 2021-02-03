<?php
session_start();
?>
<html>
	<body>
		<p>
			Welcome <?php echo '<b><i><u>' .$_SESSION['username']. '</u></i></b>' ; ?> to your Homepage !
		</p>
	</body>
</html>