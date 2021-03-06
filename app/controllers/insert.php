<?php

class insert extends Controller {

    public function index() {	
	   $this->view('inserts/insert');
		die;
    }
    
   public function entry()  /*function entry check if form is submitted , if yes then fetch data from form */
   {
	   
       if($_SERVER['REQUEST_METHOD'] == 'POST')
         {  
	        $courseid = $_REQUEST['courseid'];
            $courseName = $_REQUEST['course'];
		    $departmentName = $_REQUEST['department'];
		    $programName = $_REQUEST['program'];
		    $enter = $this->model('User'); 
		    $enter->register($courseid,$courseName,$departmentName,$programName); /*call user model class and send data as parameters to register function*/
         }	
    }

}
