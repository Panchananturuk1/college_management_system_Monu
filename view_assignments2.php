
<?php include 'filesLogic.php';?>

 


<html>
<head>
<title>View Assignments </title>
<link rel="stylesheet" type="text/css" href="css/admin1.css">

<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>

table, th, td {
    border: 5px solid green;
	font-size:20px;
}
</style>

<body>

 

 <div class="header" >
            <img alt="logo"  class="logo_img" src="logo.png";  />
          <a href="index.php" style="text-decoration:none; color:white;">  
		  <h1 class="myheads">
                College Management System</h1></a>
        </div>
	 
        


        <header class="header2" style="  width:190px; ">
				<div class="font">
				  <nav>
							<ul>
								<li> <a href="Student_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="view_book.php" class="header_Menu">View Books</a> </li><br />
								<li> <a href="view_timetb.php" class="header_Menu">View Timatables</a> </li><br />
								<li>  <a href="view_assignments.php" class="header_Menu">View Assignment</a> </li><br />
                <li>  <a href="view_assignments2.php" class="header_Menu">View Assignment2</a> </li><br />
                <li>  <a href="view_assignments3.php" class="header_Menu">View Assignment3</a> </li><br />
              	<li> <a href="view_result.php" class="header_Menu">View Result</a> </li><br />
								<li> <a href="view_attendence.php" class="header_Menu">View Attendence</a>  </li><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li><br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>


  
				
<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Assignments</h1><br />


<form action="view_assignments2.php" method="post"  name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data">

<select name="Department" >
 
  <option  value="-1">Select Department</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
  <option value="B.ED">B.ED</option>
  <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />


<select name="Semester">
  <option  value="-1" >Select Semester</option>
  <option value="1st Semester">1st Semester</option>
  <option value="2nd Semester">2nd Semester</option>
  <option value="3rd Semester">3rd Semester</option>
  <option value="4th Semester">4th Semester</option>
   <option value="5th Semester">5th Semester</option>
   <option value="6th Semester">6th Semester</option>
</select> <br /><br />

<input type="hidden" name="myfile" id="myfile" />

<input class="submit" name="submit" type="submit" value="Submit">  


</div>



<center>
<table>
<thead>
    <th>ID</th>
    <th>Department</th>
    <th>Semester</th>
    <th>Date</th>
    <th>Assignment File</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['Department']; ?></td>
      <td><?php echo $file['Semester']; ?></td>
      <td><?php echo $file['Date']; ?></td>
      <td><?php echo $file['filename']; ?></td>
      <td><a href="view_assignments2.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
  </center>












<?php

/*

 if(isset($_POST['submit'])){


 $con = mysqli_connect("localhost", "root", "", "faculty"); 
	
			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
            //$myfile = $_POST['myfile'];
       
	      $query="SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";		
			

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
if($row['Department'] == $Department && $row['Semester'] == $Semester )
{
	
   echo  '<script> alert("Record  Matching"); </script>';

   //$query2 = "SELECT * FROM assignment";
   $result2 = mysqli_query($con, $query) or die(mysqli_error($con));
  
while($rows = mysqli_fetch_assoc($result2)) {
    
    echo "<tr>";
    echo "<td>" .$rows['id']. "</td>";
    echo "<td>" .$rows['Department']. "</td>";
    echo "<td>" .$rows['Semester']. "</td>";
    echo "<td>" .$rows['Date']. "</td>";
    echo "<td>" .$rows['filename']. "</td>";
    while($rows = mysqli_fetch_assoc($result2)){
      ?>

  <?php
  }
  ?>
   ?>
  <td><a href="view_assignments2.php?file_id=<?php echo $myfile['id'] ?>">Download</a></td>
</tr>
   <?php
      }
}
else{

	echo  '<script> alert("Error: Record Not Matching"); </script>';
}

		}
?>  

</tbody>
</table>

</center>

</form>

      <div style="margin-top:400px"></div>
   </body>

   
<script>
function validate()
     {
     
       if( document.myForm.Department.value == "-1" )
        {
           alert( "Please Select your Department!" );
           return false;
        }
    
    
       if( document.myForm.Year.value == "-1" )
        {
           alert( "Please Select your Year!" );
           return false;
        }

  
 if( document.myForm.File.value == "" )
        {
           alert( "Please upload Your File!" );
           document.myForm.File.focus() ;
           return false;
        }
  
     return true;
     }
    </script>

</html>

<?php
/*
  if (isset($_GET['file_id'])) {
   $id = $_GET['file_id'];

   // fetch file to download from database
   $sql = "SELECT * FROM assignment WHERE id=$id";
   $result = mysqli_query($conn, $sql);

   $myfile = mysqli_fetch_assoc($result);
   $filepath = 'Faculty/Assignments/' . $myfile['filename'];

   if (file_exists($filepath)) {
       header('Content-Description: File Transfer');
       header('Content-Type: application/octet-stream');
       header('Content-Disposition: attachment; filename=' . basename($filepath));
       header('Expires: 0');
       header('Cache-Control: must-revalidate');
       header('Pragma: public');
       header('Content-Length: ' . filesize('Faculty/Assignments/' . $myfile['filename']));
       readfile('Faculty/Assignments/' . $myfile['filename']);

       // Now update downloads count
      // $newCount = $file['downloads'] + 1;
       //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
       //mysqli_query($conn, $updateQuery);
       //exit;
   }

} 


?>*/

      

