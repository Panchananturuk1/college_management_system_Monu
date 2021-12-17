
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
<title> Available Books</title>
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
	text-size:20px;
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
  
  			



  
<form action="view_availablebook.php" method="post"  name="myForm" onsubmit="return(validate());">
	<div class="box"  >
		  <h1 >View Available Book</h1><br /> 
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


   

	<table style="margin-left:42%; margin-top:100px; margin-bottom:5%;">
	  <tr>
	  
		
		<th>Department</th>
		<th>Book_Name</th>
		<th>Author_Name</th>
		<th>Price</th>

		
	</tr>

		 <?php
		 
		 if(isset($_POST['submit'])){
				
					$Department = $_POST['Department'];


					$con = mysqli_connect('localhost', 'root', '');
					mysqli_select_db($con,'librarian');
					
		$query="SELECT * FROM `book` WHERE Department='$Department' ";	
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$row = mysqli_fetch_array($result);
		 
		 
		 if($row['Department'] == $Department )
		 {
			 
			 echo  '<script> alert("Record  Matching"); </script>';
		 
			 $result2 = mysqli_query($con, $query)or die(mysqli_error($con));;

			while($rows = mysqli_fetch_assoc($result2)) {
				
				echo "<tr>";
				echo "<td>" .$rows['Department']. "</td>";
				echo "<td>" .$rows['Book_Name']. "</td>";
				echo "<td>" .$rows['Author_Name']. "</td>";
				echo "<td>" .$rows['Price']. "</td>";
				echo "</tr>";
			}
		 }
		 else
		 {
			 echo  '<script> alert("Error: Record Not Matching"); </script>';
		 }
		 
		 }
		 
		 ?>




	</form>
   <div style="margin-top:400px"></div>


</html>