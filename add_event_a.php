

<script>

 function validate()
      {
      
	  
	   if( document.myForm.image.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.image.focus() ;
            return false;
         }
	  
	  
	  
 if( document.myForm.Event_Name.value == "" )
         {
            alert( "Please Provide Event Name!" );
            document.myForm.Event_Name.focus() ;
            return false;
         }
		 
		 	  
 if( document.myForm.Event_Date.value == "" )
         {
            alert( "Please provide Event Date!" );
            document.myForm.Event_Date.focus() ;
            return false;
         }
	  
	  
		 if( document.myForm.File.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.File.focus() ;
            return false;
         }
	  
	
	
		 
	
		return true;
      }

	  </script>


	  
	  	  <?php

if(isset($_POST['submit'])){

			
	
		
	
			$Event_Name = $_POST['Event_Name'];
			$Description = $_POST['Description'];
			$Event_Date = $_POST['Event_Date'];
			
		
			

			
			
			$con = mysqli_connect("localhost", "root", "", "admin") or die(mysqli_error($connect)); 
			
			 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
			$q="insert into event(Event_Name, Description, Event_Date, event) values('$Event_Name','$Description','$Event_Date','$file')";
			
			$fire = mysqli_query($con, $q);
			
				if($fire){
				
				
	echo  '<script> alert("Data Sucessfully Submitted "); </script>';
	

	
}
else{
	echo  '<script> alert("ERROR "); </script>';
}
}
	

?>



<html>
<title>Add Event </title>
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
								<li> <a href="Manage_Student.php" class="header_Menu">Manage Student</a> </li><br />
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
								<li> <a href="Manage_Librarian2.php" class="header_Menu">Manage Librarian</a> </li><br />
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
  
  			



<form action="add_event_a.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
<div class="box"  >
      <h1>Add Event</h1><br />

  
      <input type="text" id="Event_Name" name="Event_Name" placeholder="Event Name.." ><br /><br />
	  <input type="date" id="Event_Date" name="Event_Date" placeholder="mm/dd/yyyy"><br /><br />
	  <input type="text" id="Description" name="Description" style="width:70%; height:30%;" placeholder="Describe Event.." ><br /><br /> 
	   
	  <input type="file" name="image" id="image" class="myfile" ><br /><br />
  	  <input class="submit" name="submit" type="submit" value="Submit">  
  
   
  </form>
</div>

    



</html>