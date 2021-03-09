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
		
		if($rows)     /* if statement execute means , there is same username exits */
		{
			echo "<strong>".$username. " username alreay exits</strong";
			require_once 'app/views/register/register.php';
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
			 }
		     else
			 {
			 echo "Try Again"; /* if not execute , then render to register view page */
			 require_once 'app/views/register/register.php';
			 }
		}
	}


}

