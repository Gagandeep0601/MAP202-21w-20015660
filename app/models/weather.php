<?php

class weather
{

    public function __construct() 
	{
        
    }
	
	public function get_weather($city)
	{
	 $key = API_KEY;
	 $query_url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$key&units=metric";
	 $json_weather = file_get_contents($query_url);
	 $php_object = json_decode($json_weather);
	 $weather_array = (array)$php_object;
	 $weather['description'] = (array) $weather_array['weather'][0];
	 $weather['temperature'] = (array) $weather_array['main'];	

	 $result = "Temperature of ".$city." is ". round($weather['temperature']['temp']). " degree with ".$weather['description']['description'];
	$_SESSION['weather'] = $result;


	/*$IP = $_SERVER['REMOTE_ADDR'];
	$ipkey = IP_API_KEY;
	 $arr_location=file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=$ipkey&ip=$IP");

print_r($arr_location); die;*/
	
	}
	
}