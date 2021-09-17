<script src="validation2.js"></script>

<html>
<title>My Profile </title>
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
								<li> <a href="add_assignment2.php" class="header_Menu">Add Assignments2</a> </li><br />
								<li> <a href="Add_attendence.php" class="header_Menu">Add Attendence</a> </li><br />
								<li>  <a href="Add_result.php" class="header_Menu">Add Result</a> </li><br />
								<li> <a href="view_event_f.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
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
                               <td >  
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
	  
	  
	  
	  
	  
	  
    <label for="Name" >Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
  
  
    <label for="Eml">Designation:</label><br />
      <input type="text" id="Designation" name="Designation" placeholder="Yor Email.." style="font-size:large" value="<?php echo  $row['Designation']; ?>" readonly="" /><br /><br />

	  
	  
    <label for="Eml" >Qualification</label><br />
      <input type="text" id="Qualification" name="Qualification" placeholder="Yor Email.." style="font-size:large" value="<?php echo  $row['Qualification']; ?>" readonly="" /><br /><br />


    <label for="Eml" >Email Id:</label><br />
      <input type="email" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />

      <label for="Contact" >Contact</label><br />
     <input type="number" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

     

   
 
</div>
 </form>

    <div style="margin-top:400px"></div>

</body>
</html>