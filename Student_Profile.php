


<html>
<title>Student </title>

<head>

<link rel="stylesheet" type="text/css" href="css/admin1.css" >

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

<script src="validation2.js" >
</script>
</head>

<body>
 		<div class="header" >
            <img alt="logo"  class="logo_img" src="logo.png";  />
        	  <a href="index.php" style="text-decoration:none; color:white;">  
		 		 <h1 class="myheads">College Management System</h1>
				</a>
        </div>
		
		
<header class="header2" style="width:190px;">
				<div class="font">
 						 <nav>
							<ul>
								<li> <a href="Student_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="view_book.php" class="header_Menu" >View Books</a> </li><br />
								<li> <a href="view_timetb.php" class="header_Menu">View Timatables</a> </li><br />
								<li>  <a href="view_assignments.php" class="header_Menu">View Assignment</a> </li><br />
								<li>  <a href="view_assignments2.php" class="header_Menu">View Assignment2</a> </li><br />
								<li>  <a href="view_assignments3.php" class="header_Menu">View Assignment3</a> </li><br />
								<li> <a href="view_result.php" class="header_Menu">View Result</a> </li><br />
								<li> <a href="view_attendence.php" class="header_Menu">View Attendence</a>  </li><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li><br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
				</div></header>



 <form action="Student_Profile.php" method="post" name="myForm" onsubmit="return(validate());" enctype="multipart/form-data" >

	<div class="box">
      <h1 style="text-align:center; font-size:40px;">My Profile</h1>
	  <table  style="margin-left:38%; margin-top:0px" >  
                    

<?php


if(isset($_POST['submit'])){


			
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];

	 		$connect = mysqli_connect("localhost", "root", "", "Students");
			$query="SELECT * FROM `info` WHERE Emailid='$Emailid' and Password='$Password'";			
		
			$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
			$row = mysqli_fetch_assoc($result);

	
	
if($row['Emailid'] == $Emailid && $row['Password'] == $Password)
{
	
	session_start();

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
<br><br>	  
 
    <label for="Name" >Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
  

    <label for="Eml">Email Id:</label><br />
      <input type="email" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />

      <label for="Contact" >Contact</label><br />
     <input type="number" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

      <label for="Dtpmnt" >Department</label><br />
      <input type="text" id="Department" name="Department" placeholder="Your Department .." style="font-size:large"value="<?php echo $row['Department']; ?>" readonly="" /><br /><br />

	  <label for="Adms_No" >Admission Number</label><br />
      <input type="text" id="Adms_Number" name="Adms_Number"  style="font-size:large"value="<?php echo $row['Adms_Number']; ?>" readonly="" /><br /><br />


      <label for="Semester" >Semester</label><br />
      <input type="text" id="Semester" name="Semester" placeholder="Your Semester.." style="font-size:large"value="<?php echo $row['Semester']; ?>" readonly="" /><br /><br /><br />
	  

   
 
</div>
 </form>

    <div style="margin-top:400px"></div>

</body>
</html>