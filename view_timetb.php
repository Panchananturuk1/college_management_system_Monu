

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
	  
	 

   
  if( document.myForm.File.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.File.focus() ;
            return false;
         }
	
		 
	
		return true;
      }
	  </script>



<html>
<head>
<title> view timetable </title>
<link rel="stylesheet" type="text/css" href="css/admin1.css">


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
								<li> <a href="Student_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="view_book.php" class="header_Menu">View Books</a> </li><br />
								<li> <a href="view_timetb.php" class="header_Menu">View Timatables</a> </li><br />
								<li>  <a href="view_assignments.php" class="header_Menu">View Assignment</a> </li><br />
								<li> <a href="view_result.php" class="header_Menu">View Result</a> </li><br />
								<li> <a href="view_attendence.php" class="header_Menu">View Attendence</a>  </li><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li><br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
				</div></header>

<form action="view_timetb.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Timetable</h1><br />



	
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
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





<input class="submit" name="submit" type="submit" value="Submit">  


</div>

<table class="table table-bordered" style="margin-left:20%; margin-top:15%">  
                     <tr>  
						 <th>timetable</th>  
						  


<?php


 if(isset($_POST['submit'])){


 $connect = mysqli_connect("localhost", "root", "", "timetable")or die(mysqli_error($connect));
	
	
			
			$Department = $_POST['Department'];
			$Year = $_POST['Year'];
	
	
	$query="SELECT * FROM `info` WHERE Department='$Department' and Year='$Year'";		
			mysqli_query($connect, $query);

		
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_fetch_assoc($result);
if($row['Department'] == $Department && $row['Year'] == $Year )
{
	

	echo  '<script> alert("Record Matching "); </script>';
	

	
			
	
                     echo '  
                          <tr>  
						  
						  
                               <td>  
							   

                                    <img src="data:image/jpeg;base64,'.base64_encode($row['timetb'] ).'" height="600" width="850" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
               
}


else{

	echo  '<script> alert("Error: Record Not Matching"); </script>';


}

		}


?>


</table>



</form>




</body>

</html>