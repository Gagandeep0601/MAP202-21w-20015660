<?php
 $dbhost = 'remotemysql.com';
    $dbname = 'IKTgBdKMlf';
    $dbuser = 'IKTgBdKMlf';
    $dbpass = 'YBpheiPa9T';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT * FROM fruits";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

?>