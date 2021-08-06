<?php

include("connection.php");
error_reporting(0);
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
				<input type="number" name="no" class="form-control"><br>

				<label>Student Name:</label>
				<input type="text" name="name" class="form-control"><br>

				<label>Student Date Of Birth:</label>
				<input type="date" name="dob" class="form-control"><br>

				<label>Student Date Of Joining:</label>
				<input type="date" name="doj" class="form-control"><br>

				<button class="btn btn-success" type="Submit" name="submit"> Submit </button><br>

			</div>
			
		</form>
		
	</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	
	$STUDENT_NO = $_POST['no'];
	$STUDENT_NAME = $_POST['name'];
	$STUDENT_DOB = $_POST['dob'];
	$STUDENT_DOJ = $_POST['doj'];

	$query ="INSERT INTO student(STUDENT_NO, STUDENT_NAME, STUDENT_DOB, STUDENT_DOJ) VALUES ('$STUDENT_NO','$STUDENT_NAME','$STUDENT_DOB','$STUDENT_DOJ')";

	$data = mysqli_query($con,$query);

	if($data)
	{
		echo "<center>Added successful <a href='display.php'>click to view</a>";
		//header('location:display.php');
	}


}
?>