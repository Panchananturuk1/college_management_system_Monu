


	  <script>

 function validate()
      {
		  if( document.myForm.Department.value == "-1" )
         {
            alert( "Please Select your Department!" );
            return false;
         }
		return true;
      }
	  </script>


<html>
<title>View Faculty </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />

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
}

		
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
  
  			
<form action="view_faculty.php" method="post"  name="myForm" onsubmit="return(validate());">


<div class="box"  >

      <h1 style="text-align:center; font-size:40px;" >View Faculty</h1><br />
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />



<input class="submit" name="submit" type="submit" value="Submit"> 
  
  </div>
   


   

<table style="margin-left:20%; margin-top:15%">
  <tr>
  
	<th> Name</th>
	<th>Gender</th>
	<th>Department</th>
	<th>Designation</th>
	<th>Qualification</th>
	<th>Contact</th>
	<th>Emailid</th>
	<th>Password</th>
	
</tr>
 <?php
 
 if(isset($_POST['submit'])){
		
			$Department = $_POST['Department'];

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'faculty');
			
			$query="SELECT * FROM `info` WHERE Department='$Department' ";	
			
	
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
 if($row['Department'] == $Department )
 {
	  echo  '<script> alert("Record  Matching"); </script>';

	  $query2 = "SELECT * FROM assignment";
	  $result2 = mysqli_query($con, $query) or die(mysqli_error($con));

	  while($rows = mysqli_fetch_assoc($result2)) {
		
		echo "<tr>";
		echo "<td>" .$row['Name']. " " .$row['Lname']. "</td>";
		echo "<td>" .$row['Gender']. "</td>";
		echo "<td>" .$row['Department']. "</td>";
		echo "<td>" .$row['Designation']. "</td>";
		echo "<td>" .$row['Qualification']. "</td>";
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
 }
 
 ?>

</table>

  </form>
    <div style="margin-top:400px"></div>
</html>