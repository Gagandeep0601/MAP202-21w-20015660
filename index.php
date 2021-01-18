<!DOCTYPE html>
<html>
<head>
<style>

table, th, td {
  border: 1px solid black;
}
</style>
</head>
    <body>
<?php
$i=1;
$j=1;
$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                           1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);	

$favorites = array(
array (
"Name" => "Dave Punk",
"Phone" => "5689741523",
"Email" => "davepunk@gmail.com"),
array (
"Name" => "Monty Smith",
"Phone" => "2584369721",
"Email" => "montysmith@gmail.com"),
array (
"Name" => "John Flinch",
"Phone" => "9875147536",
"Email" => "johnflinch@gmail.com")
);
echo '<p>First Table</p>';
echo '<table>';
foreach($films as $genre => $movies)
{  

        if($j==1)
        {
        echo '<th>MOVIES</th>';
        echo '<th>GENRE</th>';
        $j=0;
        }
	foreach($movies as $movie)
	{   
        echo '<tr>';
		echo '<td>' .$movie. '</td>';
        echo '<td>' .$genre. '</td>';
        echo '</tr>';
	}
 
}
echo '</table>';

echo '<table>';
echo '<p>Second Table</p>';

   foreach($favorites as $details)
   {
   if($i==1)
        {
        echo '<th>NAME</th>';
        echo '<th>Phone</th>';
        echo '<th>Email</th>';
        $i=0;
        }
    echo '<tr>';
		echo '<td>' .$details["Name"]. '</td>';
        echo '<td>' .$details["Phone"]. '</td>';
        echo '<td>' .$details["Email"]. '</td>';
        echo '</tr>';
    }
echo '</table>';
		
?>
	</body>
</html>
