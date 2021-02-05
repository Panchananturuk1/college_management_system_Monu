



<html>
<title>View Librarian </title>
<head>
<link rel="stylesheet" type="text/css" href="admin2_page.css" />

</head>

<style>




table, th, td {
    border: 5px solid green;
	text-size:20px;

		
</style>
<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 

 <div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1></a>
        </div>
	 
    <header class="transparent_header2" style="  width:190px; background-color: #00FFFF;">
<div class="font">
   
   <a href="admin_profile.php" style="text-decoration:none; color:white;">My Profile</a> 
  

    
    <p><a href="add_faculty.php" style="text-decoration:none; color:white;">Add Faculty</a></p>
    
   
    <p><a href="add_librarian.php" style="text-decoration:none; color:white;">Add Librarian</a></p>
   

    <p><a href="add_event_a.php" style="text-decoration:none; color:white;">Add Event</a></p>
	

    <p><a href="view_requested_book.php" style="text-decoration:none; color:white;">View Requested Book</a></p>
	
	<p><a href="view_availablebook.php" style="text-decoration:none; color:white;">View Available Books</a></p> 
	
	<p><a href="view_student.php" style="text-decoration:none; color:white;">View Student</a> </p>
	
	<p><a href="view_faculty.php" style="text-decoration:none; color:white;">View Faculty</a></p> 
	
	<p><a href="view_librarian.php" style="text-decoration:none; color:white;">View Librarian </a></p> 
	
	<p><a href="delete_data.php" style="text-decoration:none; color:white;">Delete Data </a> </p>
	
	<p><a href="index.php" style="text-decoration:none; color:white;">Logout</a> </p>
    
	</div></header>
	
	<form action="view_librarian.php" method="post"  name="myForm" onsubmit="return(validate());">
	
	
	
	
	<table style="margin-left:25%; margin-top:15%">
  <tr>
  
	<th> Name</th>
	<th>Gender</th>
	<th>Contact</th>
	<th>Emailid</th>
	<th>Password</th>
	
</tr>
 <?php

		

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'librarian');
			
			$query="SELECT * FROM info ";	
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
 
 
 if($con)
 {

 	while($info = mysqli_fetch_assoc($result)) {
		
		echo "<tr>";
		
		echo "<td>" .$info['Name']. " " .$info['Lname']. "</td>";
		echo "<td>" .$info['Gender']. "</td>";
		
		echo "<td>" .$info['Contact']. "</td>";
		echo "<td>" .$info['Emailid']. "</td>";
		
		echo "<td>" .$info['Password']. "</td>";
		
		
		
		echo "</tr>";
	}
 }
 
  else
 {
	 echo  '<script> alert("Record Not Matching"); </script>';
 }
 
 
 ?>

</table>
	
	
	</form>
	


    <div style="margin-top:400px"></div>


<?php

?>


</html>