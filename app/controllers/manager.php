<?php

class manager extends Controller {

    public function index() {
		if($_SESSION['role'] == "staff"){   // if staff redirect back to home page and show warning 
			$error = "<strong>Not Allowed! <br> Staff member cannot access manager page!<strong>";
	        $this->view('home/index', ['error' => $error]); 
			die;
		}
	    $this->view('manager/index');
	    die;
    }

}