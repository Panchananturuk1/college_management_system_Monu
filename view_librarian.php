



<html>
<title>View Librarian </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" >
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>

table, th, td {
    border: 5px solid green;
	font-size:20px;

</style>
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
								<li> <a href="admin_profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="add_faculty.php" class="header_Menu">Add Faculty</a> </li><br />
								<li> <a href="add_librarian.php" class="header_Menu">Add Librarian</a> </li><br />
								<li>  <a href="add_event_a.php" class="header_Menu">Add Event</a> </li><br />
								<li> <a href="view_requested_book.php" class="header_Menu">View Requested Book</a> </li><br />
								<li> <a href="view_availablebook.php" class="header_Menu">View Available Books</a>  </li><br />
								<li> <a href="view_student.php" class="header_Menu">View Student</a> </li><br />
								<li> <a href="view_faculty.php" class="header_Menu">View Faculty </a> </li><br />
								<li> <a href="view_librarian.php" class="header_Menu">View Librarian</a> </li><br />
								<li> <a href="delete_data.php" class="header_Menu">Delete Data</a> </li><br />
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
	</div></header>
	
	<form action="view_librarian.php" method="post"  name="myForm" onsubmit="return(validate());">
	
	
	
	
	<table style="margin-left:25%; margin-top:15%">
  <tr>
  
	<th> Name</th>
	<th>Gender</th>
	<th>Contact</th>
	<th>Emailid</th>
	<th>Password</th>
	
</tr>
 <?php

		

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'librarian');
			
			$query="SELECT * FROM info ";	
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
//$row = mysqli_fetch_array($result);
 
 
 if($con)
 {
	while($row = mysqli_fetch_assoc($result)) {

 	//while($info = mysqli_fetch_assoc($result)) {
		
		echo "<tr>";
		echo "<td>" .$row['Name']. " " .$row['Lname']. "</td>";
		echo "<td>" .$row['Gender']. "</td>";
		echo "<td>" .$row['Contact']. "</td>";
		echo "<td>" .$row['Emailid']. "</td>";
		echo "<td>" .$row['Password']. "</td>";
		echo "</tr>";
	}
 }
 
  else
 {
	 echo  '<script> alert("Record Not Matching"); </script>';
 }
 
 
 ?>

</table>
	
	
	</form>
	


    <div style="margin-top:400px"></div>
</html>