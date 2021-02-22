<?php

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
		die;
    }
    
    public function verify(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		$_SESSION['username'] = $_REQUEST['username'];
		
		$user = $this->model('User');
		$user->authenticate($username, $password); 
    }

}
