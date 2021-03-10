<?php
class register extends Controller
{
    public function index() {
	    $this->view('register/register'); //view the register form in view file of register
		die;
    }
	
	public function verify()
	{
	  $username = $_REQUEST['username'];         
	  $password = $_REQUEST['password'];
	  $verify = $this->model('User');  
	  $errors = $verify->verifyRequirements($username,$password); 
	 if(count($errors)>0) // if any requirement fail, pass these error back to view page
	 {	
	  $this->view('register/register', ['errors' => $errors]); 
	    die;
	 }else
	 {
		$registeruser = $this->model('User');  
		$userwarning = $registeruser->signup($username,$password); 
		 if(count($userwarning)>0){
           $this->view('register/register', ['alreadyuser' => $userwarning]);  // if username already exists, then pass warning to view file
		 die;
		  } 
	 }

	 }
	
}	
