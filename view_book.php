



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
<link rel="stylesheet" type="text/css" href="admin2_page.css">
</head>

<style>

table, th, td {
    border: 5px solid green;
	text-size:20px;
}

	
</style>

<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 <div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1></a>
        </div>
	 
  
  <header class="transparent_header2" style="  width:190px; background-color: #00FFFF;">
<div class="font">
  
   <a href="Student_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />
    
<p><a href="view_book.php" style="text-decoration:none; color:white;">View Books</a></p><br />  

  <p><a href="view_timetb.php" style="text-decoration:none; color:white;">View Timatables</a></p><br />
    
   
    <p><a href="view_assignments.php" style="text-decoration:none; color:white;">View Assignment</a></p>
	
	  <p><a href="view_result.php" style="text-decoration:none; color:white;">View Result</a></p><br />
   
    <p><a href="view_attendence.php" style="text-decoration:none; color:white;">View Attendence </a></p><br />

    <p><a href="view_event.php" style="text-decoration:none; color:white;">View Event</a></p>

    <p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
    </div></header>

<form action="view_book.php" method="post"  name="myForm" onsubmit="return(validate());">
<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Book</h1><br />



	
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

<select name="enrollment_no">
  <option  value="-1" >Select Enrollment No.</option>
  <option value="15/05/DCS/01">15/05/DCS/01</option>
  <option value="15/05/DCS/02">15/05/DCS/02</option>
  <option value="15/05/DCS/03">15/05/DCS/03</option>
   <option value="15/05/DCS/04">15/05/DCS/04</option>
   <option value="15/05/DCS/05">15/05/DCS/05</option>
   <option value="15/05/DCS/06">15/05/DCS/06</option>
   <option value="15/05/DCS/07">15/05/DCS/07</option>
</select><br /> <br />





<input class="submit" name="submit" type="submit" value="Submit">  

</div></form>


<table style="margin-left:40%; margin-top:15%">
  <tr>
  
	<th>BOOK NAME</th>
	<th>AUTHOR</th>
	<th>PRICE</th>
	
</tr>

<?php
 
 
 if(isset($_POST['submit'])){
		
			
			$Department = $_POST['Department'];
			
				$enrollment_no = $_POST['enrollment_no'];
			
			

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'Books');
			
					$query="SELECT * FROM `info` WHERE Department='$Department' and enrollment_no='$enrollment_no'";
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
		echo "<td>" .$info['Price']. "</td>";
		
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