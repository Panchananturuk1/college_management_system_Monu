




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
<title>View Assignments </title>
<link rel="stylesheet" type="text/css" href="admin2_page.css">
</head>

<style>


table, th, td {
    border: 5px solid green;
	text-size:20px;
}



</style>

<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 

 <div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1></a>
        </div>
	 
  
   <header class="transparent_header2" style="  width:190px; background-color: #00FFFF;">
<div class="font">
  
   <a href="Student_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />
    
<p><a href="view_book.php" style="text-decoration:none; color:white;">View Books</a></p><br />  

  <p><a href="view_timetb.php" style="text-decoration:none; color:white;">View Timatables</a></p><br />
    
   
    <p><a href="view_assignments.php" style="text-decoration:none; color:white;">View Assignment</a></p>
	
	  <p><a href="view_result.php" style="text-decoration:none; color:white;">View Result</a></p><br />
   
    <p><a href="view_attendence.php" style="text-decoration:none; color:white;">View Attendence </a></p><br />

    <p><a href="view_event.php" style="text-decoration:none; color:white;">View Event</a></p>

    <p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
    </div></header>
  
  

<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Assignments</h1><br />


<form action="view_assignments.php" method="post"  name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data">

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

<input class="submit" name="submit" type="submit" value="Submit">  


</div>


 <table class="table table-bordered" style="margin-left:20%; margin-top:15%">  
                     <tr>  
						 <th>Assignments</th>  
						  
                     </tr> 

<?php


 if(isset($_POST['submit'])){


 $connect = mysqli_connect("localhost", "root", "", "assignment"); 
	
	
			
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
							   

                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="600" width="850" class="img-thumnail" />  
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