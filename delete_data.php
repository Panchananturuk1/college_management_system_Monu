<html>
<title>Admin </title>
<head>
<link rel="stylesheet" type="text/css" href="admin_page.css" />

</head>

<style>

		
</style>

<body>



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
  <form action="/action_page.php">
      <h1 style="text-align:center; font-size:40px;" >Delete Data</h1><br />

     <input type="text" id="fname" name="firstname" placeholder="Department" style="font-size:large"><br /><br />
  
      <input type="text" id="fname" name="firstname" placeholder="Year.." style="font-size:large"><br /><br />

	   <input type="text" id="fname" name="firstname" placeholder="Batch.." style="font-size:large"><br /><br />
	   
	   
	<input type="submit" value="Delete" style="font-size:x-large">     
  
   
  </form>
</div>

    <div style="margin-top:400px"></div>


<?php

?>


</html>