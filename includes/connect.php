<?php
//Why is this important? Why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
//$mysqli->connect_error than we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connection Error(' .$mysqli->connect_errno .')'
		. $mysqli->connect_error);
}
else{ 
	echo "Connection Made";
}
$mysqli->close();

?>