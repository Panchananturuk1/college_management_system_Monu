

  <script>

 function validate()
      {
      
	  
         if( document.myForm.Book_Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Book_Name.focus() ;
            return false;
         }
		 
		     if( document.myForm.Author_Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Author_Name.focus() ;
            return false;
         }
		 
		      if( document.myForm.Price.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Price.focus() ;
            return false;
         }
	  
	  var num = /^[0-9]+$/;
	  
	     	 
	  if(!num.test(myForm.Price.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Price.focus();
      return false;
	
	  }
	  
	  
		  if( document.myForm.Department.value == "-1" )
         {
            alert( "Please Select your Department!" );
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
			$Book_Name = $_POST['Book_Name'];
			$Author_Name = $_POST['Author_Name'];
				$Price = $_POST['Price'];
			
			
			
			$con = mysqli_connect('localhost', 'root', '');
			
			mysqli_select_db($con,'book');
			$q="insert into info(Department, Book_Name, Author_Name, Price) values('".$Department."','".$Book_Name."','".$Author_Name."','".$Price."')";
			
			mysqli_query($con, $q);
			
				if(mysqli_query($con, $q)){
				
				
	echo  '<script> alert("Data Sucessfully Submitted 2 "); </script>';
	
//	echo "<script> window.location.assign('Student Profile.php'); </script>";
	
}
else{
	echo  '<script> alert("Data Sucessfully Submitted "); </script>';
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
<title> Add Book</title>
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
  
  <a href="Librarian_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />
  
   <a href="add_book.php" style="text-decoration:none; color:white;">Add Book</a> <br /><br />
    
    <p><a href="Request_book.php" style="text-decoration:none; color:white;">Request Book</a></p><br />
    
   
    <p><a href="issue_book.php" style="text-decoration:none; color:white;">Issue Book</a></p><br />
	
	  <p><a href="return_book.php" style="text-decoration:none; color:white;">Return Book</a></p><br />
   

    <p><a href="view_event_l.php" style="text-decoration:none; color:white;">View Event</a></p><br />
	

    <p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
    </div></header>
  
  			
<form action="add_book.php" method="post"  name="myForm" onsubmit="return(validate());">

<div class="box"  >

      <h1 style="text-align:center; font-size:40px;" >Add Book</h1><br />
	  
	  
	  	
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

     <input type="text" id="Book_Name" name="Book_Name" placeholder="Book Name.." style="font-size:large"><br /><br />
  
      <input type="text" id="Author_Name" name="Author_Name" placeholder="Author Name.." style="font-size:large"><br /><br />

      
     <input type="text" id="Price" name="Price" placeholder=" Price.." style="font-size:large"><br /><br />
	 
	 <input class="submit" name="submit" type="submit" value="Submit">  

  </form>
</div>

    <div style="margin-top:400px"></div>


<?php

?>


</html>