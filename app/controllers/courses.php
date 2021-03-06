<?php

class courses extends Controller
{

    public function index() 
	{	
		$course = $this->model('course');
		$departments= $course->get_all_departments(); /*calling get_all_departments function of course.php (model) */
        $this->view('courses/departments', ['departments' => $departments]); /*send data to view file of departments*/
	    die;
    }
	
	public function display( $department = null , $program = null  ) 
	{   
		if($program)
		{
		$course = $this->model('course');
		$courselist=$course->get_all_courses($program);/*calling get_all_courses function of course.php (model) */
        $this->view('courses/courses',['courses'=>$courselist]);/*send data to view file of courses*/
	    die;
		}
		
		if($department)
		{
		$course = $this->model('course');
		$programs=$course->get_all_programs($department);/*calling get_all_programs function of course.php (model) */	
	    $this->view('courses/programs',['programs'=>$programs]);/*send data to view file of courses*/
	    die;
		}			
	}

}
