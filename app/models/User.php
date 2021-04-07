<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

	public function register($courseid,$coursename,$departmentname,$programname) /*insert data into database*/
	{   
		$username = strtoupper($courseid);
		$coursename = strtoupper($coursename);
		$departmentname = strtoupper($departmentname);
		$programname = strtoupper($programname);
	    $db = db_connect();
        $statement = $db->prepare("INSERT INTO courses(courseId, courseName, department, program) VALUES (:courid,:courname,:deptname,:progname);");
        $statement->bindValue(':courid', $courseid);
		$statement->bindValue(':courname',$coursename);
		$statement->bindValue(':deptname',$departmentname);
		$statement->bindValue(':progname',$programname);
        $statement->execute();
		?>
                <p>
					<a href="/courses">DEPARTMENT</a>
				</p>
<?php
    } 
	
    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare("select * from login
                                WHERE username = :name; ");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			
			$_SESSION['role'] =$this->getrole( $rows['permission']);
			
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
	public function signup($username,$password)
	{   
		$_SESSION['username'] = $username;	 
		$username = strtolower($username); /*change into lower character */
		$passwordhash = password_hash($password,PASSWORD_DEFAULT); /*cnvert password into hash value*/
		$db = db_connect();
        $statement = $db->prepare("select * from login WHERE username = :name; "); /*fetch data according to username */
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if($rows>0)     /* if statement execute means , there is same username exits */
		{   
			return $rows;
			die;
		}
		else
		{  /* username not exits, insert new user into login database */	
		$insertStatement = $db->prepare("INSERT INTO login(username, password) VALUES (:user,:pass);");
        $insertStatement->bindValue(':user', $username);
		$insertStatement->bindValue(':pass',$passwordhash);
		$insertStatement->execute();	
             if($insertStatement)  /* if statement execute then user will direclty jump to home page*/
			 {
		     $_SESSION['auth'] = 1;
			 header('Location: /home');
			die;
			 }
		     else
			 {
			 echo "Try Again"; /* if not execute */
			  die;
			 }
		}
	}
	
	
	public function verifyRequirements($username,$password)  //verify all the requirements of username and password 
	{
	 $nospace = preg_match('/\s/',$username);  
	  $specialCharsInUsername = preg_match('@[^\w]@', $username);      
      $number    = preg_match('@[0-9]@', $password);
      $htmlInUsername = preg_match("/<[^<]+>/",$username); //html tag in username	  
	   $numberinUsername   = preg_match('@[0-9]@', $username); //numeric in username
      $specialCharsInPassword = preg_match('@[^\w]@', $password);    	  	
	
		if($nospace || $specialCharsInUsername || $htmlInUsername || $numberinUsername || !$number || !$specialCharsInPassword || strlen($password)<8)   
		{ // show the warning if any condition failed
        $warning = "<strong>There should not be space or special character , html tag and numeric value in username and <br> Password must contain atleat one numeric value , special character and length should not be less than 8 character </strong><br>";  

	   
		return $warning;
		die;
		}
	}	
         
	public function deleteAccount($username)
	{
		$db = db_connect();
        $statement = $db->prepare("DELETE FROM login WHERE username = :name;");
        $statement->bindValue(':name', $username);
        $statement->execute();
		if($statement)
		{
			 unset($_SESSION['auth']); 
			header('Location: /login');
		}
	}

	public function getrole($id)
	{
	  $db = db_connect();
        $statement = $db->prepare("select role from permissions
                                WHERE id = :id; ");
        $statement->bindValue(':id', $id);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);	
		return $rows['role'];
	}
	
}

