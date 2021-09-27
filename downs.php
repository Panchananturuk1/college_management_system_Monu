
<?php

$con = mysqli_connect('localhost', 'root', '', 'faculty');

//$result = mysqli_query($conn, $sql);

//$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	//$query2 = "SELECT * FROM assignment";
	//$run2 = mysqli_query($con,$query2);
	
	
	if (isset($_POST['submit'])) { 
	

			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
		
$query="SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";			
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


$row = mysqli_fetch_assoc($result);
if($row['Department'] == $Department && $row['Semester'] == $Semester )
{

echo  '<script> alert("Record  Matching"); </script>';

}

	}


?>