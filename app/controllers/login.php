<?php

class Login extends Controller {

    public function index() {
		$weather = $this->model('weather');	
		$weather->get_weather('Khanna'); // pass city name as a parameter
		
		
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
