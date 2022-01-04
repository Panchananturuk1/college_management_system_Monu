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
        <style>
  
  /* Styling the body */
  body {
      margin: 0;
      padding: 0;
  }
     
  /* Styling section, giving background
      image and dimensions */
  section {
      width: 100%;
      height: 100vh;
      background: 
url('');
      background-size: cover;
  }
    

     
  /* Styling the three events section */
  section .events {
      position: relative;
      width: 50%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    margin-left:30%;
      box-sizing: border-box;
  }
     
  /* Styling the links of 
  the events section */
  section .events ul {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      margin: 0;
      padding: 40px;
      box-sizing: border-box;
  }
     
  /* Styling the lists of the event section */
  section .events ul li {
      list-style: none;
      background: #fff;
      box-sizing: border-box;
      height: 200px;
      margin: 15px 0;
  }
     
  /* Styling the time class of events section */
  section .events ul li .time {
      position: relative;
      padding: 20px;
      background: #262626;
      box-sizing: border-box;
      width: 30%;
      height: 100%;
      float: left;
      text-align: center;
      transition: .5s;
  }
     
  /* Styling the hover effect
      of events section */
  section .events ul li:hover .time {
      background: #e91e63;
  }
     
  /* Styling the header of time 
      class of events section */
  section .events ul li .time h2 {
      position: absolute;
      margin: 0;
      padding: 0;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 60px;
      line-height: 30px;
  }
     
  /* Styling the texts of time 
  class of events section */
  section .events ul li .time h2 span {
      font-size: 30px;
  }
     
  /* Styling the details 
  class of events section */
  section .events ul li .details {
      padding: 20px;
      background: #fff;
      box-sizing: border-box;
      width: 70%;
      height: 100%;
      float: left;
  }
     
  /* Styling the header of the 
  details class of events section */
  section .events ul li .details h3 {
      position: relative;
      margin: 0;
      padding: 0;
      font-size: 22px;
  }
     
  /* Styling the lists of details 
  class of events section */
  section .events ul li .details p {
      position: relative;
      margin: 10px 0 0;
      padding: 0;
      font-size: 16px;
  }
     
  /* Styling the links of details
  class of events section */
  section .events ul li .details a {
      display: inline-block;
      text-decoration: none;
      padding: 10px 15px;
      border: 1.5px solid #262626;
      margin-top: 8px;
      font-size: 18px;
      transition: .5s;
  }
     
  /* Styling the details class's hover effect */
  section .events ul li .details a:hover {
      background: #e91e63;
      color: #fff;
      border-color: #e91e63;
  }
</style>


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
								<li> <a href="Add_attendence.php" class="header_Menu">Add Attendence</a> </li><br />
								<li>  <a href="Add_result.php" class="header_Menu">Add Result</a> </li><br />
								<li> <a href="view_event_f.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
	
	
<form action="view_event_f2.php" method="post" enctype="multipart/form-data">	

	
	
  
  <?php

	$con = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($con));;
	$query="SELECT * FROM event";		
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
//$row = mysqli_fetch_array($result);


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