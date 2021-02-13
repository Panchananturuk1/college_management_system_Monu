


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
<link rel="stylesheet" type="text/css" href="admin.css" />
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>


table, th, td {
    border: 5px solid green;
	text-size:20px;
}

		
</style>
<body > 

 

 <div class="header" >
            <img alt="logo" class="logo_image" src="logo.png" />
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


<select name="Year">
  <option  value="-1" >Select Year</option>
  <option value="2012-2014">2012-2014</option>
  <option value="2012-2015">2012-2015</option> 
  <option value="2013-2015">2013-2015</option>
   <option value="2013-2016">2013-2016</option>
    <option value="2014-2016">2014-2016</option>
	<option value="2014-2017">2014-2017</option>
	<option value="2015-2017">2015-2017</option>
	<option value="2015-2018">2015-2018</option>
	
</select> <br /><br />

<input class="submit" name="submit" type="submit" value="Submit"> 
  
  </div>
   

<table style="margin-left:20%; margin-top:15%">
  <tr>
  
	<th> Name</th>
	<th>Department</th>
	<th>Year</th>
	<th>Batch</th>
	<th>Contact</th>
	<th>Emailid</th>
	<th>Password</th>
	<th>TotalFee</th>
	<th>PaidFee</th>
	<th>Gender</th>
</tr>
 <?php
 
 if(isset($_POST['submit'])){
		
			$Department = $_POST['Department'];
			$Year = $_POST['Year'];

			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'Student');
			
			$query="SELECT DISTINCT ON column Emailid,Contact * FROM `info` WHERE Department='$Department' and Year='$Year'";	
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
 
 if($row['Department'] == $Department && $row['Year'] == $Year )
 {
	  echo  '<script> alert("Record  Matching"); </script>';
	 
 	 	while($info = mysqli_fetch_assoc($result)) {
		
		echo '<div align="center">';
		echo "<tr>";		
		echo "<td>" .$info['Name']. " " .$info['Lname']. "</td>";
		echo "<td>" .$info['Department']. "</td>";
		echo "<td>" .$info['Year']. "</td>";
		echo "<td>" .$info['Batch']. "</td>";
		echo "<td>" .$info['Contact']. "</td>";
		echo "<td>" .$info['Emailid']. "</td>";		
		echo "<td>" .$info['Password']. "</td>";
		echo "<td>" .$info['TotalFee']. "</td>";
		echo "<td>" .$info['PaidFee']. "</td>";
		echo "<td>" .$info['Gender']. "</td>";
		echo "</tr>";
		echo '</div>';
		}
	
 }
 

  else
 {
	 echo  '<script> alert("Error: Record Not Matching"); </script>';
 }
 
 }
 
 ?>

</table>
   

   
  </form>
   <div style="margin-top:400px"></div>






</html>