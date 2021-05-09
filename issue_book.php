



	  <script>

 function validate()
      {
      
	  
	  
		  if( document.myForm.enrollment_no.value == "-1" )
         {
            alert( "Please Select your Department!" );
            return false;
         }
	  
	  
		  if( document.myForm.book.value == "-1" )
         {
            alert( "Please Select your Year!" );
            return false;
         }
	  
	  
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Name.focus() ;
            return false;
         }


		 
	
		return true;
      }
	  </script>
	  
	  
	  
	  <?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
	

// On submitting form below function will execute.
if(isset($_POST['submit'])){

			
	
		
			$Department = $_POST['Department'];
			$enrollment_no = $_POST['enrollment_no'];
			$book = $_POST['book'];
			$Author_Name = $_POST['Author_Name'];
			$Price = $_POST['Price'];
				$Name = $_POST['Name'];
			
			

			
			
			
			$con = mysqli_connect("localhost", "root", "", "librarian");
			
			//mysqli_select_db($con,'Books');
			$q="INSERT INTO iss_book(Department, enrollment_no, book, Author_Name, Price, Name) VALUES ('".$Department."','".$enrollment_no."','".$book."','".$Author_Name."','".$Price."','".$Name."' )";
			
		$fire =	mysqli_query($con, $q);
			
				if($fire){
				
				
	echo  '<script> alert("Book Issued Sucessfully 2"); </script>';
	
//	echo "<script> window.location.assign('Student Profile.php'); </script>";
	
}
else{
	echo  '<script> alert("ERROR"); </script>';
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





<script src="validation2.js"></script>

<html>
<title>My Profile </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
								<li> <a href="Librarian_Profile.php" class="header_Menu">My Profile</a> </li><br />
                                        <li> <a href="add_book.php" class="header_Menu">Add Book</a> </li><br />
								<li> <a href="Request_book.php" class="header_Menu">Request Book</a> </li><br />
								<li> <a href="issue_book.php" class="header_Menu">Issue Book</a> </li><br />
								<li>  <a href="return_book.php" class="header_Menu">Return Book</a> </li><br /><br />
								<li> <a href="view_event_l.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
  
  			
<form action="issue_book.php" method="post"  name="myForm" onsubmit="return(validate());">

<div class="box"  >
      <h1 style="text-align:center; font-size:40px;" >Issue Book</h1><br />
  
  
  <select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />
  
    

<input type="text" id="enrollment_no" name="enrollment_no" placeholder="Enter Enrollment No." style="font-size:large"><br /><br />

<select name="book">
   <option  value="-1" >Select Book</option>
   <option value="C">C</option>
   <option value="C++">C++</option>	
   <option value="Database">Database</option>
   <option value="HTML">HTML</option>
   <option value=".NET">.NET<option>
   <option value="php">php</option>
   <option value="JAVA">JAVA</option>
  
  
</select> <br /><br />

 <input type="text" id="Author_Name" name="Author_Name" placeholder="Author name.." style="font-size:large"><br /><br />
  <input type="text" id="Price" name="Price" placeholder="Price.." style="font-size:large"><br /><br />
	 
	 <input type="text" id="Name" name="Name" placeholder=" Student Name.." style="font-size:large"><br /><br />

	 <input class="submit" name="submit" type="submit" value="Submit">  
  
   
  </form>
</div>

    <div style="margin-top:400px"></div>


<?php

?>


</html>