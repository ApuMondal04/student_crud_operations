<style>
	td{
		padding: 10px;
	}
</style>

<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM student";

$data = mysqli_query($con,$query);

$toatal = mysqli_num_rows($data);

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

				<div class="card-header ">

<h1 class="text-dark text-center"> Display Data </h1>

<center><table border="2">
	<tr class="text-white text-center bg-dark">
		<th>STUDENT_NO</th>
		<th>STUDENT_NAME</th>
		<th>STUDENT_DOB</th>
		<th>STUDENT_DOJ</th>
		<th colspan="2">OPERATIONS</th>
	</tr>

<?php  

while($result = mysqli_fetch_assoc($data))
{
	echo "<tr>
		<td>".$result['STUDENT_NO']."</td>
		<td>".$result['STUDENT_NAME']."</td>
		<td>".$result['STUDENT_DOB']."</td>
		<td>".$result['STUDENT_DOJ']."</td>

		<td><a href='update.php?sno=$result[STUDENT_NO]&sn=$result[STUDENT_NAME]&dob=$result[STUDENT_DOB]&doj=$result[STUDENT_DOJ]'>Update</a></td> 
		<td><a href='delete.php?sno=$result[STUDENT_NO] ' onclick='return checkdelete()'> Delete </a></td>
	</tr>";
	
}

?>
</table><br>
<a href='index.php'>click to insert data</a>

	<script>
		function checkdelete()
		{
			return confirm( "Are You Sure You Want To Delete This Record ?");
		}

	</script>	
</body>
</html>