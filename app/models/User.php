<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

	public function register($courseid,$coursename,$departmentname,$programname)
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


}

