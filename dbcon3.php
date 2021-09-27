<?php
// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'faculty');

/*
$sql = "SELECT * FROM assignment";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC); */


$Department = $_POST['Department'];
$Semester = $_POST['Semester'];

//$sql = "SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";
//$result = mysqli_query($con, $sql);


 if(isset($_POST['submit'])){

	
			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
		
$query="SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";			
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


$row = mysqli_fetch_assoc($result);
if($row['Department'] == $Department && $row['Semester'] == $Semester )
{
	
	echo  '<script> alert("Record  Matching"); </script>';

   //$query2 = "SELECT * FROM assignment";
   $result2 = mysqli_query($con, $query) or die(mysqli_error($con));
   
   
   
   
   
   
  ?>
  <?php while($rows = mysqli_fetch_assoc($result2)) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['Department']; ?></td>
      <td><?php echo $row['Semester']; ?></td>
      <td><?php echo $row['Date']; ?></td>
      <td><?php echo $row['filename']; ?></td>
      <td><a href="dbcon2.php?file_id=<?php echo $file['id'] ?>">Download</a></td> 
      

    </tr> 
  <?php 
      }
	
}

else{

	echo  '<script> alert("Error: Record Not Matching"); </script>';
    }
 }
	
	
	
	






	
	
	// Downloads files
	
	
	if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
	
	    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];

    // fetch file to download from database
    $sql = "SELECT * FROM assignment WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
   -  $filepath = 'Faculty/Assignments/' . $file['filename'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
   -     header('Content-Length: ' . filesize('uploads/' . $file['filename']));
   -     readfile('Faculty/Assignments/' . $file['filename']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
	
