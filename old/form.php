<?php
    $dbhost = 'remotemysql.com';
    $dbname = 'IKTgBdKMlf';
    $dbuser = 'IKTgBdKMlf';
    $dbpass = 'YBpheiPa9T';
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $query = "SELECT countryName FROM country";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       			
   $name = $_REQUEST[uname];
   $email = $_REQUEST[email];
   $country = $_REQUEST[country];
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    	echo '<strong>' .$name. '</strong> your email id is <i> ' .$email. '</i> and your country is <u> ' .$country. '</u>.' ;
	    die;
   }
   else
   {
	require_once('form.php');
   }
  ?>

<html>
	<head>
		form
	</head>
	<body>
		<form action=form.php method="post">
			<label for="username">Name:-</label>&nbsp
			<input type="text" id="uname" name="uname"><br>
			<label for="email">Email:-</label>&nbsp
			<input type="email" id="email" name="email"><br>
			<label for="Country">Country:-</label>
			<select name="country" >
				<?php 
				  foreach($result as $value)
	              {
		           foreach($value as $data)
		            {
			           echo '<option  >';
					   echo $data;
					   echo '</option>';
		            }
	              }
				?>
			</select>
			<input type="submit" value="submit">
		</form>
	</body>
</html>