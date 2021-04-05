<?php

class admin extends Controller {

    public function index() {
		if($_SESSION['role'] != 3){ //if not admin then redirect back to home page and show warning.
			$onlyAdmin = "<strong>Sorry not Allowed! <br> Only admin can access admin page! <strong>";
	        $this->view('home/index', ['onlyAdmin' => $onlyAdmin]); 
			die;
		}
	    $this->view('admin/index');
	    die;
    }

}