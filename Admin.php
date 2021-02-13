





<script src="vu.js"></script>


<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
	

// On submitting form below function will execute.
if(isset($_POST['submit'])){

			
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
	
	
	 $connect = mysqli_connect("localhost", "root", "", "admin");
			
			
			
			$query="SELECT * FROM `info` WHERE Emailid='$Emailid' and Password='$Password'";			
			mysqli_query($connect, $query);

		
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_fetch_assoc($result);
if($row['Emailid'] == $Emailid && $row['Password'] == $Password)
{
	
	session_start();
	echo  '<script> alert("User Name and Password are Correct"); </script>';
}else
{
		echo  '<script> alert("User Name and Password are Wrong"); </script>';
	
	echo "<script> window.location.assign('index.php'); </script>";
}	
				
			
			
		
	
	
	
	
if (empty($_POST["fname"])) {
$nameError = "Name is required";
} else {
$fname = test_input($_POST["fname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["lname"])) {
$emailError = "Email is required";
} else {
$lname = test_input($_POST["lname"]);

}

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
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
  
   <a href="Admin.php" style="text-decoration:none; color:white;">Add Student</a> 
    
    <p><a href="add_faculty.php" style="text-decoration:none; color:white;">Add Faculty</a></p>
    
   
    <p><a href="add_librarian.php" style="text-decoration:none; color:white;">Add Librarian</a></p>
	
	  <p><a href="add_timetable_admin.php" style="text-decoration:none; color:white;">Add Timetable</a></p>
   

    <p><a href="add_event_a.php" style="text-decoration:none; color:white;">Add Event</a></p>
	

    <p><a href="view_requested_book.php" style="text-decoration:none; color:white;">View Requested Book</a></p>
	
	<p><a href="view_availablebook.php" style="text-decoration:none; color:white;">View Available Books</a></p> 
	
	<p><a href="view_student.php" style="text-decoration:none; color:white;">View Student</a> </p>
	
	<p><a href="view_faculty.php" style="text-decoration:none; color:white;">View Faculty</a></p> 
	
	<p><a href="view_librarian.php" style="text-decoration:none; color:white;">View Librarian </a></p> 
	
	<p><a href="delete_data.php" style="text-decoration:none; color:white;">Delete Data </a> </p>
	
	<p><a href="Librarian.php" style="text-decoration:none; color:white;">Logout</a> </p>
    
	</div></header>
  
  			

<form action="Admin.php" method="post"  name="myForm" onsubmit="return(validate());">
	<div class="box"  >
      <h1 style="text-align:center; font-size:40px;" >Add Student</h1><br />
		<input type="text" id="Name" name="Name" placeholder="First Name.." style="font-size:large"><br /><br />
	
	<input type="text" id="Lname" name="Lname" placeholder="Last Name.." style="font-size:large"><br /><br />
	
			<select name="Gender">
                     <option value="-1" selected>[Select Gender]</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                
           </select><br /><br />	

      
  
<select name="Department" >
 
 
  <option  value="-1">Select Department</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

<select name="Year">
  <option  value="-1" >Select Year</option>
  <option value="2012-2015">2012-2015</option>
  <option value="2012-2014">2012-2014</option>
  <option value="2013-2015">2013-2015</option>
   <option value="2014-2014">2014-2014</option>
    <option value="2015-2017">2015-2017</option>
	
</select> <br /><br />



<select name="Batch">
  <option  value="-1" >Select Batch</option>
  <option value="1st Batch">1st Batch</option>
  <option value="2nd Batch">2nd Batch</option>
  <option value="3rd Batch">3rd Batch</option>
   <option value="4th Batch">4th Batch</option>
    <option value="5th Batch">5th Batch</option>
	
</select> <br /><br />
  



	  
	   <input type="text" id="Contact" name="Contact" placeholder="Contact.." style="font-size:large"><br /><br />
	   
	    <input type="text" id="Emailid" name="Emailid" placeholder="Email id.." style="font-size:large"><br /><br />
		
		<input type="text" id="Password" name="Password" placeholder="Password" style="font-size:large"><br /><br />
		
		 <input type="text" id="TotalFee" name="TotalFee" placeholder="Total Fees.." style="font-size:large"><br /><br />
		 
		  <input type="text" id="PaidFee" name="PaidFee" placeholder="Paid Fees.." style="font-size:large"><br /><br />

<input class="submit" name="submit" type="submit" value="Submit">  
  
   
  </form>
  
     </div>

</html>