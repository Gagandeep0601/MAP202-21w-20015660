<?php
class register extends Controller
{
    public function index() {
	    $this->view('register/register'); //view the register form in view file of register
		die;
    }
	
	public function verify()
	{
	  $username = $_REQUEST['username'];         // fetch username and password from register form*/
	  $password = $_REQUEST['password'];
	  $nospace = preg_match('/\s/',$username);   // search white space in username
	  $specialCharsInUsername = preg_match('@[^\w]@', $username);      // search special character in username
      $number    = preg_match('@[0-9]@', $password);           //serach numeric number in password 
      $specialCharsInPassword = preg_match('@[^\w]@', $password);   //search special character in password
		
	if ( $nospace || $specialCharsInUsername || !$number || !$specialCharsInPassword || strlen($password)<8 ) 
	{   /* outer if check conditions in username and password , if anyonw condition become true , this block will run*/
		
		 require_once 'app/views/register/register.php';  /*if any single condition become true then after showing the warning messege , register view                                                             page will be load to fill it again*/
		if($nospace || $specialCharsInUsername)   /* there should be no space and special character in username, if condtion true this messange will be                                                         shown to user*/
		{
        echo '<strong>There should not be space or special character in username</strong><br>';  
		}
		if(!$number || !$specialCharsInPassword || strlen($password)<8 ) /*if there is no numeric,special charater or password length is less than 8                                                                              ,this block show this messege to user*/
	   {
		echo "<strong>Password must contain atleat one numeric value , special character and length should not be less than 8 character</strong>";
	   }
    }
	else
	{
		$registeruser = $this->model('User');  /*if all the conditions of username and password true, user will be redirect to User model*/
		$registeruser->signup($username,$password); /*pass username and password as a argumemts to the funtion named signup of User model*/
	}
  }
	
}	
