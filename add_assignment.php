
	
	<?php include 'filesLogic.php';?>  
	  
<html>
<title> Add Assignments</title>
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
								<li> <a href="Faculty_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="add_assignment.php" class="header_Menu">Add Assignments</a> </li><br />
								<li> <a href="Add_attendence.php" class="header_Menu">Add Attendence</a> </li><br />
								<li>  <a href="Add_result.php" class="header_Menu">Add Result</a> </li><br /><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
				
  
<div class="box"  >
<form  method="post"    name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data" >
  
   		
<h1 style="text-align:center; font-size:40px;" >Add Assignments</h1><br />


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

     <input type="date" name="date" id="date" />
     <input type="file" name="myfile" id="image" style="font-size:large; margin-left:150px;;"><br /><br />	
     <input type="submit" class="myfile" name="submit" id="submit" value="Submit"  class="submit" />  
		
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
      
      
 
  
 if( document.myForm.image.value == "" )
        {
           alert( "Please upload Your File!" );
           document.myForm.image.focus() ;
           return false;
        }
    
       var image_name = $('#image').val();  
          if(image_name == '')  
          {  
               alert("Please Select Image");  
               return false;  
          }  
          else  
          {  
               var extension = $('#image').val().split('.').pop().toLowerCase();  
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
               {  
                    alert('Invalid Image File');  
                    $('#image').val('');  
                    return false;  
               }  
          }  
     }
      </script>
      
      
      

