


<?php
							//UPLOADDDDDDDDDDDDDDDDDDDDD

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'faculty');
 if(isset($_POST['submit'])){


$Department = $_POST['Department'];
$Semester = $_POST['Semester'];
$Date = $_POST['date'];

	$filename = $_FILES['myfile']['name'];
	$fileTmpName = $_FILES['myfile']['tmp_name'];
	$filepath = 'Faculty/Assignments/' . $filename;
	$query =  "INSERT INTO assignment (Department, Semester, Date, filename) 
    VALUES ('$Department','$Semester','$Date','$filename')";
	$run = mysqli_query($con, $query) or die(mysqli_error($con));
	
	if($run){
		move_uploaded_file($fileTmpName, $filepath);
		echo  '<script> alert("Assignment Sucessfully Uploaded"); </script>';
	}else
	{
		echo  '<script> alert("ERROR"); </script>';
	}		

 }
 
 
 
 
?>

	
