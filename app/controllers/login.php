<?php

class Login extends Controller {

    public function index() {
		$weather = $this->model('weather');
		$city = $weather->getCurrentCity();//call function to get city name
		$weather->get_weather($city);
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
