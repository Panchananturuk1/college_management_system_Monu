




<script src="validation2.js"></script>


<?php


// On submitting form below function will execute.
if(isset($_POST['submit'])){


			
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
	
			
			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'admin');
			
			
			$query="SELECT * FROM `info` WHERE Emailid='$Emailid' and Password='$Password'";			
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['Emailid'] == $Emailid && $row['Password'] == $Password)
{
	
	session_start();
	echo  '<script> alert("User Name and Password are Correct"); </script>';
	//echo "<script> window.location.assign('Student Profile.php'); </script>";

}


else{

	echo  '<script> alert("User Name and Password are Wrong"); </script>';
	
	echo "<script> window.location.assign('index.php'); </script>";
}

mysqli_close($con);

		}



?>





<html>
<title>Admin </title>
<head>
<link rel="stylesheet" type="text/css" href="admin2_page.css" />

</head>

<style>

		
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
  
  			

<div class="box"  >
   <form action="admin_profile.php" method="post">
	  

      <h1 style="text-align:center; font-size:40px;" >My Profile</h1><br />
    <label for="Name" style="margin-left:140px; font-size:25px">Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
  

     <label for="Contact" style="margin-left:140px; font-size:25px">Gender</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Gender']; ?>" readonly="" /><br /><br />
	 
    <label for="Eml" style="margin-left:140px; font-size:25px">Email Id:</label><br />
      <input type="text" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />

      <label for="Contact" style="margin-left:140px; font-size:25px">Contact</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

     

   
 
</div>
 </form>
</div>

    <div style="margin-top:400px"></div>


<?php

?>


</html>