





<html>
<title> view event</title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css">
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

	
img{
	
	
	
}
	
</style>
</head>
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
	
	
	 <form action="view_event.php" method="post" enctype="multipart/form-data">
	 <div class="box">
<h1 style="text-align:center; font-size:40px;" > Event</h1><br />
	<table style="margin-left:25%; margin-top:0%">
  
  <?php

	$con = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($con));;
	$query="SELECT * FROM event";		
		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);

   echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['event'] ).'" height="225" width="300" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
?>
</table><br /><br />

  <label for="Name">Event Name:</label><br />
  <input type="text" id="Event_Name" name="Event_Name" placeholder="Event Name.." style="font-size:large" value="<?php  echo $row['Event_Name'] ; ?>" readonly="" /><br /><br />
  
	  <label for="Name" >Event Date:</label><br />
	  <input type="text" id="Event_Date" name="Event_Date" placeholder="mm/dd/yyyy" style="font-size:large" value="<?php  echo $row['Event_Date'] ; ?>" readonly="" /><br /><br />
	   
  </div>
  </form>
  </body>
	</html>