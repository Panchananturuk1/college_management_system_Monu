





<html>
<title> view event</title>
<head>
<link rel="stylesheet" type="text/css" href="admin2_page.css">

<style>

	
img{
	
	
	
}
	
</style>
</head>
<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 

		<div class="transparent_header" >
          <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; 
		  margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1>
		  </a>
        </div>
 
  <header class="transparent_header2" style="width:190px; background-color: #00FFFF;">
	<div class="font">
		<a href="Student_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br />  
		<p><a href="view_book.php" style="text-decoration:none; color:white;">View Books</a></p><br />  
		<p><a href="view_timetb.php" style="text-decoration:none; color:white;">View Timatables</a></p><br />  
		<p><a href="view_assignments.php" style="text-decoration:none; color:white;">View Assignment</a></p>	
		<p><a href="view_result.php" style="text-decoration:none; color:white;">View Result</a></p><br />  
		<p><a href="view_attendence.php" style="text-decoration:none; color:white;">View Attendence </a></p><br />
		<p><a href="view_event.php" style="text-decoration:none; color:white;">View Event</a></p>
		<p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
	</div>
 </header>
	
	
	 <form action="view_event.php" method="post" enctype="multipart/form-data">
	 <div class="box"  >
		<h1 style="text-align:center; font-size:40px;" > Event</h1>
		<table style="margin-left:25%; margin-top:0%">
  
  <?php

	
	$con = mysqli_connect("localhost", "root", "", "event");
	$query="SELECT * FROM info";		
	mysqli_query($con, $query);

		
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
	  <label for="Name" style="margin-left:140px; font-size:25px">Event Name:</label><br />
      <input type="text" id="Event_Name" name="Event_Name" placeholder="Event Name.." style="font-size:large" value="<?php  echo $row['Event_Name'] ; ?>" readonly="" /><br /><br />

	  <label for="Name" style="margin-left:140px; font-size:25px">Event Date:</label><br />
	  <input type="text" id="Event_Date" name="Event_Date" placeholder="mm/dd/yyyy" style="font-size:large" value="<?php  echo $row['Event_Date'] ; ?>" readonly="" /><br /><br />
  
  </div>
  </form>
</body>
	</html>