<?php

$host="localhost";
$username="root";
$password="";
$database="student_db";

$con= mysqli_connect($host,$username,$password,$database);
// connection check
if($con)
{
 // echo "database connected";	
}
else {
	die(mysqli_connect_error($con));
}


?>