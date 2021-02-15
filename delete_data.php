<html>
<title>Admin </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />


<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<style>

		
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
								<li> <a href="admin_profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="add_faculty.php" class="header_Menu">Add Faculty</a> </li><br />
								<li> <a href="add_librarian.php" class="header_Menu">Add Librarian</a> </li><br />
								<li>  <a href="add_event_a.php" class="header_Menu">Add Event</a> </li><br />
								<li> <a href="view_requested_book.php" class="header_Menu">View Requested Book</a> </li><br />
								<li> <a href="view_availablebook.php" class="header_Menu">View Available Books</a>  </li><br />
								<li> <a href="view_student.php" class="header_Menu">View Student</a> </li><br />
								<li> <a href="view_faculty.php" class="header_Menu">View Faculty </a> </li><br />
								<li> <a href="view_librarian.php" class="header_Menu">View Librarian</a> </li><br />
								<li> <a href="delete_data.php" class="header_Menu">Delete Data</a> </li><br />
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
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