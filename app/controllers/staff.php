<?php

class staff extends Controller {

	// everyone can access it
    public function index() {       
	
	    $this->view('staff/index');
	 
    }

}