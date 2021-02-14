


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
	  

	
		return true;
      }
	  </script>



<html>
<head>
<title>View Assignments </title>
<link rel="stylesheet" type="text/css" href="css/admin1.css">

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

<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Attendence</h1><br />



<form action="view_attendence.php" method="post"  name="myForm" onsubmit="return(validate());">

 

	
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

<select name="Year">
  <option  value="-1" >Select Year</option>
  <option value="2012-2015">2012-2015</option>
  <option value="2012-2014">2012-2014</option>
  <option value="2013-2015">2013-2015</option>
  <option value="2013-2016">2013-2016</option>
   <option value="2014-2016">2014-2016</option>
   <option value="2014-2017">2014-2017</option>
    <option value="2015-2017">2015-2017</option>
	 <option value="2015-2018">2015-2018</option>
	
</select> <br /><br />


<input class="submit" name="submit" type="submit" value="Submit">  


</div>

 <table class="table table-bordered" style="margin-left:20%; margin-top:15%">  
                     <tr>  
						 <th>Attendence</th>  
						  
                     </tr> 

<?php


 if(isset($_POST['submit'])){


 $connect = mysqli_connect("localhost", "root", "", "attendence")or die(mysqli_error($connect));
	
	
			
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
							   

                                    <img src="data:image/jpeg/png/docx;base64,'.base64_encode($row['attendence'] ).'" height="600" width="850" class="img-thumnail" />  
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