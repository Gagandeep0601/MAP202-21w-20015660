<?php

class courses extends Controller
{

    public function index() 
	{	
		$course = $this->model('course');
		$departments= $course->get_all_departments();
        $this->view('courses/departments', ['departments' => $departments]);
	    die;
    }
	public function display( $department = null , $program = null  )
	{   
		
		if($program)
		{
		$course = $this->model('course');
		$courselist=$course->get_all_courses($program);
        $this->view('courses/courses',['courses'=>$courselist]);
	    die;
		}
		
		if($department)
		{
		$course = $this->model('course');
		$programs=$course->get_all_programs($department);	
	    $this->view('courses/programs',['programs'=>$programs]);
	    die;
		}
		
		
		
		
	}

}
