


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

table{
   margin-left:5%;
}

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
								<li> <a href="view_result.php" class="header_Menu">View Result</a> </li><br />
								<li> <a href="view_attendence.php" class="header_Menu">View Attendence</a>  </li><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li><br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
  
  

<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Assignments</h1><br />


<form action="view_assignments.php" method="post"  name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data">

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

<input class="submit" name="submit" type="submit" value="Submit">  


<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>
</tbody>
</table>



<?php


 if(isset($_POST['submit'])){


 $con = mysqli_connect("localhost", "root", "", "faculty"); 
	
			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
        
	      $query="SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";		
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
if($row['Department'] == $Department && $row['Semester'] == $Semester )
{
	
   echo  '<script> alert("Record  Matching"); </script>';

   $query2 = "SELECT * FROM assignment";
   $result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
  
      while($rows = mysqli_fetch_assoc($result2)) {
    
    echo "<tr>";
    
    echo "<td>" .$rows['id']. "</td>";
    echo "<td>" .$rows['name']. "</td>";
    echo "<td>" .$rows['size']. "</td>";
    echo "<td>" .$rows['Department']. "</td>";
    echo "<td>" .$rows['Semester']. "</td>";
         
      }
}

else{

	echo  '<script> alert("Error: Record Not Matching"); </script>';
}

		}
?>




</div>




      </form>

      <div style="margin-top:400px"></div>
   </body>
</html>

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
