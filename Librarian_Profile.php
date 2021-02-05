
<script src="validation2.js"></script>



<html>
<title> Librarian</title>
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
  
  <a href="Librarian_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />
  
   <a href="add_book.php" style="text-decoration:none; color:white;">Add Book</a> <br /><br />
    
    <p><a href="Request_book.php" style="text-decoration:none; color:white;">Request Book</a></p><br />
    
   
    <p><a href="issue_book.php" style="text-decoration:none; color:white;">Issue Book</a></p><br />
	
	  <p><a href="return_book.php" style="text-decoration:none; color:white;">Return Book</a></p><br />
   

    <p><a href="view_event_l.php" style="text-decoration:none; color:white;">View Event</a></p><br />
	

    <p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
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
	  
    <label for="Name" style="margin-left:140px; font-size:25px">Name:</label><br />
     <input type="text" id="Name" name="Name" placeholder="Your name.." style="font-size:large"value="<?php  echo $row['Name'] , " " ,$row['Lname'] ; ?>" readonly="" /><br /><br />
  

     <label for="Contact" style="margin-left:140px; font-size:25px">Gender</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Gender']; ?>" readonly="" /><br /><br />
	 
    <label for="Eml" style="margin-left:140px; font-size:25px">Email Id:</label><br />
      <input type="text" id="Emailid" name="Emailid" placeholder="Yor Email.." style="font-size:large" value="<?php echo $_POST['Emailid']; ?>" readonly="" /><br /><br />

      <label for="Contact" style="margin-left:140px; font-size:25px">Contact</label><br />
     <input type="text" id="Contact" name="Contact" placeholder="Your contact number.." style="font-size:large"value="<?php echo $row['Contact']; ?>" readonly="" /><br /><br />

     

   
 
</div>
 </form>
</div>

    <div style="margin-top:400px"></div>




</html>