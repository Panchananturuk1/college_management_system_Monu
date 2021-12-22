



	  <script>

 function validate()
      {
      
	  
	  
		  if( document.myForm.Department.value == "-1" )
         {
            alert( "Please Select your Department!" );
            return false;
         }
	  
	  
		
		  if( document.myForm.enrollment_no.value == "-1" )
         {
            alert( "Please Select your Enrollment Number!" );
            return false;
         }
		 
	
		return true;
      }
	  </script>



<html>
<head>
<title> View Book </title>
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
	text-size:20px;
}

	
</style>

<body >

 
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

<form action="view_book.php" method="post"  name="myForm" onsubmit="return(validate());">
<div class="box"  >
<h1 >View Book</h1><br />

<select name="Department" >
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />
<input type="text" id="enrollment_no" name="enrollment_no" placeholder="Admission Number" ><br />

<input class="submit" name="submit" type="submit" value="Submit">  

</div></form>


<table style="margin-left:40%; margin-top:15%">
  <tr>
  
	<th>BOOK NAME</th>
	<th>AUTHOR</th>
	<th>Student Name</th>
	
</tr>

<?php
 
 
 if(isset($_POST['submit'])){
			
			$Department = $_POST['Department'];
			$enrollment_no = $_POST['enrollment_no'];
	
			$con = mysqli_connect("localhost", "root", "","librarian");
				
			$query="SELECT * FROM `iss_book` WHERE Department='$Department' and enrollment_no='$enrollment_no'";
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
 
if($row['Department'] == $Department &&  $row['enrollment_no'] == $enrollment_no)
 {
	  echo  '<script> alert("Record  Matching"); </script>';
	 
 	 	while($info = mysqli_fetch_assoc($result)) {
		
		echo "<tr>";
		
		echo "<td>" .$info['book']. "</td>";
		echo "<td>" .$info['Author_Name']. "</td>";
		echo "<td>" .$info['Name']. "</td>";
		echo "</tr>";
		}
	
 }
 
 
 
  else
 {
	 echo  '<script> alert("Error: Record Not Matching"); </script>';
 }
 
 }
 
 ?>


 
</table>

<div style="margin-top:400px;"></div>

</body>

</html>