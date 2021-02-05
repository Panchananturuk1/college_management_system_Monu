<script src="validation2.js"></script>



<html>
<title>My Profile </title>
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
  <a href="Faculty_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />
  
    <a href="add_assignment.php" style="text-decoration:none; color:white;">Add Assignments</a> <br /><br />
    
    <p><a href="Add_attendence.php" style="text-decoration:none; color:white;">Add Attendence</a></p><br />
    
   
    <p><a href="Add_result.php" style="text-decoration:none; color:white;">Add Result</a></p><br />
	
	 <p><a href="add_timetable_admin.php" style="text-decoration:none; color:white;">Add Timetable</a></p>
   

    <p><a href="view_event_f.php" style="text-decoration:none; color:white;">View Event</a></p><br />
	


    <p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
    </div></header>

 <form action="Student Profile.php" method="post">
	  

<div class="box"  >
 
      <h1 style="text-align:center; font-size:40px;" >My Profile</h1>
	  
	  
	  
	    <table  style="margin-left:40%; margin-top:0px">  
                    


<?php


if(isset($_POST['submit'])){


			
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
	
	
	 $connect = mysqli_connect("localhost", "root", "", "faculty");
			
			
			
			$query="SELECT * FROM `info` WHERE Emailid='$Emailid' and Password='$Password'";			
			mysqli_query($connect, $query);

		
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_fetch_assoc($result);
if($row['Emailid'] == $Emailid && $row['Password'] == $Password)
{
	
	
	echo  '<script> alert("User Name and Password are Correct"); </script>';
	
	
	
	     echo '  
                          <tr>  
						  
						  
                               <td>  
							   
		

                                    <img src="data:image/jpeg;base64,'.base64_encode($row['profile'] ).'" height="150" width="140" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
               
	
}


else{

	echo  '<script> alert("User Name and Password are Wrong"); </script>';
	
	echo "<script> window.location.assign('index.php'); </script>";
}



		}


		
?>

</table>
	  
	  
	  
	  
	  
	  
    <label for="Name" style="margin-left:140px; font-size:25px">Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
  
  
    <label for="Eml" style="margin-left:140px; font-size:25px">Designation:</label><br />
      <input type="text" id="Designation" name="Designation" placeholder="Yor Email.." style="font-size:large" value="<?php echo  $row['Designation']; ?>" readonly="" /><br /><br />

	  
	  
    <label for="Eml" style="margin-left:140px; font-size:25px">Qualification</label><br />
      <input type="text" id="Qualification" name="Qualification" placeholder="Yor Email.." style="font-size:large" value="<?php echo  $row['Qualification']; ?>" readonly="" /><br /><br />


    <label for="Eml" style="margin-left:140px; font-size:25px">Email Id:</label><br />
      <input type="text" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />

      <label for="Contact" style="margin-left:140px; font-size:25px">Contact</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

     

   
 
</div>
 </form>

    <div style="margin-top:400px"></div>

</body>
</html>