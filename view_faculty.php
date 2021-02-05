






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
<link rel="stylesheet" type="text/css" href="admin2_page.css" />

</head>

<style>


table, th, td {
    border: 5px solid green;
	text-size:20px;
}

		
</style>
<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px"> 

 

 <div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1></a>
        </div>
	 

	 
	 <header class="transparent_header2" style="  width:190px; background-color: #00FFFF;">
<div class="font">
   
   <a href="admin_profile.php" style="text-decoration:none; color:white;">My Profile</a> 
  

    
    <p><a href="add_faculty.php" style="text-decoration:none; color:white;">Add Faculty</a></p>
    
   
    <p><a href="add_librarian.php" style="text-decoration:none; color:white;">Add Librarian</a></p>
   

    <p><a href="add_event_a.php" style="text-decoration:none; color:white;">Add Event</a></p>
	

    <p><a href="view_requested_book.php" style="text-decoration:none; color:white;">View Requested Book</a></p>
	
	<p><a href="view_availablebook.php" style="text-decoration:none; color:white;">View Available Books</a></p> 
	
	<p><a href="view_student.php" style="text-decoration:none; color:white;">View Student</a> </p>
	
	<p><a href="view_faculty.php" style="text-decoration:none; color:white;">View Faculty</a></p> 
	
	<p><a href="view_librarian.php" style="text-decoration:none; color:white;">View Librarian </a></p> 
	
	<p><a href="delete_data.php" style="text-decoration:none; color:white;">Delete Data </a> </p>
	
	<p><a href="index.php" style="text-decoration:none; color:white;">Logout</a> </p>
    
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
			mysqli_query($con, $query);

		
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

 
 
 if($row['Department'] == $Department )
 {
	 
	  echo  '<script> alert("Record  Matching"); </script>';

 	while($info = mysqli_fetch_assoc($result)) {
		
		echo "<tr>";
		
		echo "<td>" .$info['Name']. " " .$info['Lname']. "</td>";
		echo "<td>" .$info['Gender']. "</td>";
		echo "<td>" .$info['Department']. "</td>";
		echo "<td>" .$info['Designation']. "</td>";
		echo "<td>" .$info['Qualification']. "</td>";
		echo "<td>" .$info['Contact']. "</td>";
		echo "<td>" .$info['Emailid']. "</td>";
		
		echo "<td>" .$info['Password']. "</td>";
		
		
		
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