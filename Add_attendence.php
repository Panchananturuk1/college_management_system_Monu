
	 
	  
<html>
<title> Add Attendence</title>
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
		       <h1 class="myheads">College Management System</h1>
         </a>
        </div>

        <header class="header2" style="  width:190px; ">
			<div class="font">
			  <nav>
							<ul>
								<li> <a href="Faculty_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="add_assignment.php" class="header_Menu">Add Assignments</a> </li><br />
								<li> <a href="Add_attendence.php" class="header_Menu">Add Attendence</a> </li><br />
								<li>  <a href="Add_result.php" class="header_Menu">Add Result</a> </li><br />
								<li> <a href="view_event_f.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
  
<div class="box"  >
<form action="Add_attendence.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
  
      <h1 style="text-align:center; font-size:40px;" >Add Attendence</h1><br />
	
      <select name="Department" >
      <option  value="-1">Select Department</option>
      <option value="BCA">BCA</option>
      <option value="MCA">MCA</option>
      <option value="MBA">MBA</option>
      <option value="B.ED">B.ED</option>
      <option value="INTEGRATED Msc">INTEGRATED Msc</option>
      </select><br /> <br />

<select name="Semester">
      <option  value="-1" >Select Semester</option>
      <option value="1st Semester">1st Semester</option>
      <option value="2nd Semester">2nd Semester</option>
      <option value="3rd Semester">3rd Semester</option>
      <option value="4th Semester">4th Semester</option>
      <option value="5th Semester">5th Semester</option>
      <option value="6th Semester">6th Semester</option>
      </select> <br /><br />
      <input name="date" type="date" value="Submit" required>

	<input type="file" name="myfile" id="image" style="font-size:large; margin-left:150px;;"><br /><br />
	<input class="submit" name="submit" type="submit" value="Submit">  
  </form>
</div>

    <div style="margin-top:400px"></div>
</html>


<script>
function validate()
     {
     
    
       if( document.myForm.Department.value == "-1" )
        {
           alert( "Please Select your Department!" );
           return false;
        }
    
    
       if( document.myForm.Year.value == "-1" )
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

   if( document.myForm.image.value == "" )
        {
           alert( "Please upload Your File!" );
           document.myForm.image.focus() ;
           return false;
        }
   
     return true;
     }
    </script>



<?php 
       $conn = mysqli_connect("localhost", "root", "", "faculty")or die(mysqli_error($conn));

       $sql = "SELECT * FROM attendence";
       $result = mysqli_query($conn, $sql);
       
       $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
       if(isset($_POST["submit"]))  
       {  
      
                     $Department = $_POST['Department'];
                     $Semester = $_POST['Semester'];
                     $Date = $_POST['date'];
                //  $myfile =  $_POST['myfile'];

                     $filename = $_FILES['myfile']['name'];
      
                     // destination of the file on the server
                     $destination = 'Faculty/Attendance/' . $filename;
                 
                     // get the file extension
                     $extension = pathinfo($filename, PATHINFO_EXTENSION);
                 
                     // the physical file on a temporary uploads directory on the server
                     $file = $_FILES['myfile']['tmp_name'];
                     $size = $_FILES['myfile']['size'];
                 
                     if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                         echo "You file extension must be .zip, .pdf or .docx";
                     } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
                         echo "File too large!";
                     } else {
                         // move the uploaded (temporary) file to the specified destination
                         if (move_uploaded_file($file, $destination)) {
                             $sql = "INSERT INTO attendence (name,Date, size, Department, Semester) 
                             VALUES ('$filename', '$Date', $size, '$Department','$Semester')";
                             if (mysqli_query($conn, $sql)) {
                               echo  '<script> alert("Attendance Sucessfully Uploaded"); </script>';
                           
                             }
                         } else {
                           echo  '<script> alert("Failed to upload Attendance."); </script>';
                         }
                     }	
       }  
      

      ?>



