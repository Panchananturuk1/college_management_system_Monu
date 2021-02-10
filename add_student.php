


<!DOCTYPE html>
<html>
<title>Add Student </title>
<link rel="stylesheet" type="text/css" href="style2.css" />
<head>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      


		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>

 
 
 <div class="header" >            		
	  			<img alt="logo" class="logo_img" src="logo.png"; style="text-align:center" />			
				<div class="clg" >
					<a href="index.php" style="text-decoration:none; color:white;">
						<h1 class="myhead">
						 College Management System
						 </h1>
					 </a>
					 									
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<div style="float:right;">
					<div class="collapse navbar-collapse" id="micon">									 
						  <nav>
							<ul>
								<li> <a href="index.php" class="header_Menu">Home</a> </li>
								<li> <a href="#ABOUT" class="header_Menu">About</a> </li>
								<li>  <a href="#student" class="header_Menu">Student</a> </li>
								<li> <a href="#faculty" class="header_Menu">Faculty</a> </li>
								<li> <a href="#librarian" class="header_Menu">Librarian</a>  </li>
								<li> <a href="#admin" class="header_Menu">Admin</a> </li>
							</ul>
						  </nav>					 			 					
						</div> 	
					</div>				
				 </div>			 							 		 		
			</div>

<div class="box" style="text-align:center;">
	
	<form action="add_student.php" method="post"  name="myForm" onsubmit="return(validate());"  enctype="multipart/form-data">
	
      <h1 style="text-align:center; font-size:40px;" >Registration</h1><br />
	  
		<input type="file" name="image" id="image" style="font-size:large; margin-left:150px;"><br /><br />	  
		<input type="text" id="Name" name="Name" placeholder="First Name.."><br /><br />	
		<input type="text" id="Lname" name="Lname" placeholder="Last Name.."><br /><br />
	
				<select name="Gender">
					<option value="-1" selected>[Select Gender]</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>								
				</select><br /><br />	

				<select name="Department"  style="text-align:center;">
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

				<select name="Batch">
				  <option  value="-1" >Select Batch</option>
				  <option value="1st Batch">1st Batch</option>
				  <option value="2nd Batch">2nd Batch</option>
				  <option value="3rd Batch">3rd Batch</option>
				   <option value="4th Batch">4th Batch</option>
					<option value="5th Batch">5th Batch</option>
					
				</select> <br /><br />
  
		<input type="text" id="Contact" name="Contact" placeholder="Contact.."><br /><br />	   
	    <input type="text" id="Emailid" name="Emailid" placeholder="Email id.." ><br /><br />		
		<input type="password" id="Password" name="Password" placeholder="Password"><br /><br />
		<input type="text" id="TotalFee" name="TotalFee" placeholder="Total Fees.." ><br /><br />		 
		<input type="text" id="PaidFee" name="PaidFee" placeholder="Paid Fees.."><br /><br />
		<input class="submit" name="submit" type="submit" value="Submit">  
	</form>
   </div>
	 
</html>


<script src="student_val.js">


	   $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  

</script>


<?php

if(isset($_POST['submit'])){

						
			$Name = $_POST['Name'];
			$Lname = $_POST['Lname'];
			$Department = $_POST['Department'];
			$Year = $_POST['Year'];
			$Batch = $_POST['Batch'];
			$Contact = $_POST['Contact'];
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
			$TotalFee = $_POST['TotalFee'];
			$PaidFee = $_POST['PaidFee'];
			$Gender = $_POST['Gender'];
			
	   
 $connect = mysqli_connect("localhost", "root", "", "Student") or die(mysqli_error($connect)); 
 

			
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $q = "INSERT INTO info(profile, Name, Lname, Department, Year, Batch, Contact, Emailid, Password, TotalFee, PaidFee, Gender) VALUES ('$file','$Name','$Lname','$Department','$Year','$Batch','$Contact','$Emailid','$Password','$TotalFee','$PaidFee','$Gender')";  
		mysqli_query($connect, $q);
			
				if(mysqli_query($connect, $q))
				{
		
						echo  '<script> alert("Data Sucessfully Submitted 2 "); </script>';

	
				}
				else
					{
						echo  '<script> alert("Data Sucessfully Submitted "); </script>';
						
						echo "<script> window.location.assign('index.php'); </script>";
					}
}

?>