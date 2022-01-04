





<html>
<title> view event</title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css">
<link rel="stylesheet" type="text/css" href="css/event.css" />
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
	

	
  
  <?php

	$con = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($con));;
	$query="SELECT * FROM event";		
		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
?>

<section>
<div class="events">

<table class="table table-striped table-hover">
<thead>
                    <tr>
                     
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Event Details </th>
                        
                      
                    </tr>
                </thead>
                <tbody>



<?php
$i=0;
$query2="SELECT * FROM event";		
			
$result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result2)) { ?>
  <tr> 
                      
                        <td><?php echo $row['Event_Name']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Event_Date']; ?></td>

            </tr>
            <?php } ?></table>
              
            <!--
                <ul>
                <li>
                    <div class="time">
                        <h2>
                            <?php echo $i++; ?>
                             <br><span><?php  echo $row['Event_Date'] ; ?></span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                          
						  <?php  echo $row['Event_Name'] ; ?>
                        </h3>
                        <p> 
                        <?php  echo $row['Description'] ; ?>
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
            </ul> </td></tr>    
            
</table> -->
        </div>
</section> 	   
 
  </form>
  </body>
	</html>