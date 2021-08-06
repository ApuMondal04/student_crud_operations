<?php

include("connection.php");
error_reporting(0);

$_GET['sno'];
$_GET['sn'];
$_GET['dob'];
$_GET['doj'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="col-lg-6 m-auto">

		<form method="POST">

			<br><br><div class="card">

				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Insert Student Data</h1>
					
				</div>
				
				<label>Student No:</label>
				<input type="number" value="<?php echo $_GET['sno']; ?>" name="no" class="form-control"><br>

				<label>Student Name:</label>
				<input type="text" value="<?php echo $_GET['sn']; ?>" name="name" class="form-control"><br>

				<label>Student Date Of Birth:</label>
				<input type="date" value="<?php echo $_GET['dob']; ?>" name="dob" class="form-control"><br>

				<label>Student Date Of Joining:</label>
				<input type="date" value="<?php echo $_GET['doj']; ?>" name="doj" class="form-control"><br>

				<button class="btn btn-success" value="<?php echo $_GET['sno']; ?>" type="Submit" name="submit"> Submit </button><br>

			</div>
			
		</form>
		
	</div>
</body>
</html>

<?php
if ($_POST['submit']) {

	$no = $_POST['no'];
	$name= $_POST['name'];
	$dob = $_POST['dob'];
	$doj = $_POST['doj'];

	$query = "UPDATE student SET STUDENT_NO='$no',STUDENT_NAME='$name',STUDENT_DOB='$dob',STUDENT_DOJ='$doj' WHERE STUDENT_NO='$no'";

	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<center><br>Record Updated Successfully <a href='display.php'>click to view</a>";
	}
	else
	{
		echo "Record Not Update";
	}

}
else
{
	
}
?>