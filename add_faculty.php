
<script src="validation_add_faculty.js"></script>

<?php


if(isset($_POST['submit'])){

			
	
			$Name = $_POST['Name'];
			$Lname = $_POST['Lname'];	
			$Gender = $_POST['Gender'];
			$Department = $_POST['Department'];
			$Designation = $_POST['Designation'];
			$Qualification = $_POST['Qualification'];
			$Contact = $_POST['Contact'];
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
			
			 $connect = mysqli_connect("localhost", "root", "", "faculty") or die(mysqli_error($connect)); 
			 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
			$q="insert into info(profile, Name, Lname, Gender, Department, Designation, Qualification, Contact, Emailid, Password) values('$file','$Name','$Lname','$Gender','$Department','$Designation','$Qualification','$Contact','$Emailid','$Password')";
			
			mysqli_query($connect, $q);
			
				if(mysqli_query($connect, $q)){
				
				
	echo  '<script> alert("Data Sucessfully Submitted 2 "); </script>';
	

	
}
else{
	echo  '<script> alert("Data Sucessfully Submitted "); </script>';
}
		
	
	
}
	

?>



<html>
<title>Add Faculty </title>
<head>
<link rel="stylesheet" type="text/css" href="admin_page3.css" />

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
  
  <form action="add_faculty.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">			
  
<div class="box"  >
   

      <h1 style="text-align:center; font-size:40px;" >Add Faculty</h1><br />

			  <input type="file" name="image" id="image" style="font-size:large; margin-left:150px;;"><br /><br />
	  
     <input type="text" id="Name" name="Name" placeholder="First Name .." style="font-size:large"><br /><br />
	 
	 
	     <input type="text" id="Lname" name="Lname" placeholder="Last Name .." style="font-size:large"><br /><br />
		 
		 		<select name="Gender">
                     <option value="-1" selected>[Select Gender]</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                
           </select><br /><br />	
  
  
  <select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />
      <input type="text" id="Designation" name="Designation" placeholder="Designation.." style="font-size:large"><br /><br />

      
     <input type="text" id="Qualification" name="Qualification" placeholder="Qualification.." style="font-size:large"><br /><br />
	 
	 <input type="text" id="Contact" name="Contact" placeholder="Contact.." style="font-size:large"><br /><br />

	    <input type="text" id="Emailid" name="Emailid" placeholder="Email id.." style="font-size:large"><br /><br />
		
		<input type="password" id="Password" name="Password" placeholder="Password...." style="font-size:large"><br /><br />
		
	<input class="submit" name="submit" type="submit" value="Submit"> 
  

</div>
   
  </form>
    <div style="margin-top:400px"></div>


<?php

?>


</html>