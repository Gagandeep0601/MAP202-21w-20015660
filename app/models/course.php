<?php

class course
{

    public function __construct() 
	{
        
    }
	
    public function get_all_courses($program)
	{
	$db = db_connect();
    $statement = $db->prepare("select * from courses where program = :program ;");
	$statement->bindValue(':program',$program);	
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
	}
	
	
	 public function get_all_departments()
	{
	$db = db_connect();
    $statement = $db->prepare("select distinct(department) from courses;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
	}
	
	 public function get_all_programs($department)
	{
	$db = db_connect();
    $statement = $db->prepare("select distinct(program) , department from courses where department= :dept;");
	$statement->bindValue(':dept',$department);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
	}
	
}