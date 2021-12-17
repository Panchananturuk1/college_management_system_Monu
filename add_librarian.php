
<script src="validation_librarian.js"></script>

<?php

if(isset($_POST['submit'])){

			
	
			$Name = $_POST['Name'];
			$Lname = $_POST['Lname'];	
			$Gender = $_POST['Gender'];
			
			$Contact = $_POST['Contact'];
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
		
			

			
			
			$connect = mysqli_connect("localhost", "root", "", "librarian") or die(mysqli_error($connect)); 
	
	 		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
			$q = "INSERT INTO info(profile, Name, Lname, Gender, Contact, Emailid, Password) VALUES ('$file','$Name','$Lname','$Gender','$Contact','$Emailid','$Password')";
			
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
<title>Add Librarian </title>
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
								<li> <a href="admin_profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
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
  <form action="add_librarian.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
      <h1  >Add Librarian</h1><br />

	   <input type="file" class="myfile" name="image" id="image" ><br /><br />	   
	   <input type="text" id="Name" name="Name" placeholder="First Name .."><br /><br />	 	 
	   <input type="text" id="Lname" name="Lname" placeholder="Last Name .."><br /><br />
		 
		 		<select name="Gender">
                     <option value="-1" selected>[Select Gender]</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>               
				</select><br /><br />	
	 
		<input type="number" id="Contact" name="Contact" placeholder="Contact.." ><br /><br />		 
	    <input type="email" id="Emailid" name="Emailid" placeholder="Email id.." ><br /><br />		
		<input type="password" id="Password" name="Password" placeholder="Password...." ><br /><br />		
		<input class="submit" name="submit" type="submit" value="Submit"> 
   
  </form>
</div>

    <div style="margin-top:400px"></div>
</html>