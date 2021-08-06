<?php

include("connection.php");

$no = $_GET['sno'];

$query = "DELETE FROM student WHERE STUDENT_NO='$no'";

$data = mysqli_query($con,$query);

if($data)
{
	echo "<script>alert('Record Deleted')</script>";


?>

	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/crud_students/display.php">

<?php
}
else
{
	echo "<font color='red'>Record Not Deleted";
}

?>