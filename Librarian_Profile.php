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
								<li> <a href="Librarian_Profile.php" class="header_Menu">My Profile</a> </li><br />
                                        <li> <a href="add_book.php" class="header_Menu">Add Book</a> </li><br />
								<li> <a href="Request_book.php" class="header_Menu">Request Book</a> </li><br />
								<li> <a href="issue_book.php" class="header_Menu">Issue Book</a> </li><br />
								<li>  <a href="return_book.php" class="header_Menu">Return Book</a> </li><br /><br />
								<li> <a href="view_event_l.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>








<div class="box"  >
   <form action="Librarian_Profile.php" method="post">
	  

      <h1 style="text-align:center; font-size:40px;" >My Profile</h1>
	  
	   <table  style="margin-left:40%; margin-top:0px">  
	  
	  <?php


if(isset($_POST['submit'])){


			
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
	
	
	 $connect = mysqli_connect("localhost", "root", "", "librarian");
			
			
			
			$query="SELECT * FROM `info` WHERE Emailid='$Emailid' and Password='$Password'";			
			mysqli_query($connect, $query);

		
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
	  
    <label for="Name" >Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
     <label for="Contact">Gender</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Gender']; ?>" readonly="" /><br /><br />
     <label for="Eml">Email Id:</label><br />
     <input type="text" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />
      <label for="Contact">Contact</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

</div>
 </form>
</div>

    <div style="margin-top:400px"></div>

</html>