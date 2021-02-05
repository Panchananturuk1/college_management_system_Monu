

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
			$Event_Date = $_POST['Event_Date'];
			
		
			

			
			
			$con = mysqli_connect("localhost", "root", "", "event") or die(mysqli_error($connect)); 
			
			 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
			$q="insert into info(Event_Name, Event_Date, event) values('$Event_Name','$Event_Date','$file')";
			
			mysqli_query($con, $q);
			
				if(mysqli_query($con, $q)){
				
				
	echo  '<script> alert("Data Sucessfully Submitted 2 "); </script>';
	

	
}
else{
	echo  '<script> alert("Data Sucessfully Submitted "); </script>';
}
}
	

?>



<html>
<title>Add Event </title>
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
  
  			



<form action="add_event_a.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
<div class="box"  >
      <h1 style="text-align:center; font-size:40px;" >Add Event</h1><br />

  
      <input type="text" id="Event_Name" name="Event_Name" placeholder="Event Name.." style="font-size:large"><br /><br />

	   <input type="text" id="Event_Date" name="Event_Date" placeholder="mm/dd/yyyy" style="font-size:large"><br /><br />
	   
	  <input type="file" name="image" id="image" style="font-size:large; margin-left:150px;;"><br /><br />
  
		<input class="submit" name="submit" type="submit" value="Submit">  
  
   
  </form>
</div>

    <div style="margin-top:400px"></div>



</html>