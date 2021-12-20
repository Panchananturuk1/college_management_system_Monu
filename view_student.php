


	  <script>

 function validate()
      {
      
		  if( document.myForm.Department.value == "-1" )
         {
            alert( "Please Select your Department!" );
            return false;
         }
	  
		  if( document.myForm.Year.value == "-1" )
         {
            alert( "Please Select your Year!" );
            return false;
         }

	
		return true;
      }
	  </script>


<html>
<title>View Student </title>
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
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
								<li> <a href="Manage_Librarian.php" class="header_Menu">Manage Librarian</a> </li><br />
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

<form action="view_student.php" method="post"  name="myForm" onsubmit="return(validate());">
<div class="box"  >
      <h1 style="text-align:center; font-size:40px;" >View Student</h1><br />

<select name="Department" >
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

<select name="Semester">
  <option  value="-1" >Select Semester</option>
  <option value="1st Semester">1st Semester</option>
  <option value="2nd Semester">2nd Semester</option>
  <option value="3rd Semester">3rd Semester</option>
  <option value="4th Semester">4th Semester</option>
   <option value="5th Semester">5th Semester</option>
   <option value="6th Semester">6th Semester</option>
</select> <br /><br />


<input class="submit" name="submit" type="submit" value="Submit"> 
  
  </div>
   
<center>
<table style="margin-left:20%; margin-top:15%">
  <tr>
	<th> Name</th>
	<th> Gender</th>
	<th> DOB</th>
	<th>Department</th>
	<th>Admission Number</th>
	<th>Semester</th>
	<th>Contact</th>
	<th>Emailid</th>
	<th>Password</th>
	<th>TotalFee</th>

</tr>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Students";
$con = new mysqli($servername, $username, $password,$db) or die(mysqli_error($con));

 if(isset($_POST['submit'])){
		
			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];

			$query="SELECT * FROM `info` WHERE Department='$Department' and Semester='$Semester'";	
			$result = mysqli_query($con, $query) or die(mysqli_error($con));

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
 if($row['Department'] == $Department && $row['Semester'] == $Semester ) {
	 
	echo  '<script> alert("Record  Matching"); </script>';

	$query2 = "SELECT * FROM assignment";
	$result2 = mysqli_query($con, $query) or die(mysqli_error($con));

	while($rows = mysqli_fetch_assoc($result2)) {

		
		echo "<tr>";		
		echo "<td>" .$rows['Name']. " " .$rows['Lname']. "</td>";
		echo "<td>" .$rows['Gender']. "</td>";
		echo "<td>" .$rows['dob']. "</td>";
		echo "<td>" .$rows['Department']. "</td>";
		echo "<td>" .$rows['Adms_Number']. "</td>";
		echo "<td>" .$rows['Semester']. "</td>";
		echo "<td>" .$rows['Contact']. "</td>";
		echo "<td>" .$rows['Emailid']. "</td>";		
		echo "<td>" .$rows['Password']. "</td>";
		echo "<td>" .$rows['Gender']. "</td>";
		echo "</tr>";
		
	}
		}else{
				 echo  '<script> alert("Error: Record Not Matching"); </script>';
 			}
 	
 }else{
	echo  '<script> alert("Record  Not Matching or Data is Not Available in the Database"); </script>';
	 }
}
 ?>
</table>

</center>
  </form>
   <div style="margin-top:400px"></div>






</html>