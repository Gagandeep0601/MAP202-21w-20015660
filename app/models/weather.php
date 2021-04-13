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
   }
	
	 public function getCurrentCity() //get city name 
	 {
	$IP = $this->getRealIpAddr(); 
	$ipkey = IP_API_KEY;
	$arr_location=(array)json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=$ipkey&ip=$IP&format=json"));	
     return $arr_location['cityName'];  
	 }
	
	public function getRealIpAddr()   // get ip address
   {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
	
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ipaddress=$_SERVER['HTTP_X_FORWARDED_FOR'];
	  $IParray=array_values(array_filter(explode(',',$ipaddress)));
	  $ip = $IParray[0];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
   }
}