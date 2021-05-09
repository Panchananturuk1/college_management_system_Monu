
<?php
$msg;
?>

<!DOCTYPE html>
<html>
<title>Add Student </title>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />
<head>
	<script src="student_val.js"></script> 
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
				 </div>
			</div>

<div class="box" style="text-align:center;">

	<form action="add_student.php" method="post"  name="myForm" onsubmit="return(validate());"  enctype="multipart/form-data" onclick="this.disabled = true">
	<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
      <h1 >Registration</h1><br />
				<input type="file" name="image" id="image" style="font-size:large; margin-left:150px;"><br /><br />
				<input type="text" id="Name" name="Name" placeholder="First Name.."><br /><br />
				<input type="text" id="Lname" name="Lname" placeholder="Last Name.."><br /><br />
				<input type="radio" value="Male" id="male" name="gens" >
				<label for="male"> Male </label>
				<input type="radio" value="Female" id="female" name="gens" >
				<label for="male"> Female </label> <br />
				<input type="date" id="dob" id="dob" name="dob" ><br /><br />
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

		<input type="number" id="Contact" name="Contact" placeholder="Contact.."><br /><br />
	    <input type="email" id="Emailid" name="Emailid" placeholder="Email id.." ><br /><br />
		<input type="hidden" ><!--<div id="iderror"><?php echo"$msg";?> </div> --> </input>
		<input type="password" id="Password" name="Password" placeholder="Password"><br /><br />
		
		<input class="submit" name="submit" type="submit" value="Submit" id="myButton">
	</form>
   </div>

	</body>
</html>


<!-- <script src="student_val.js">


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

</script> -->




<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = 'Students';


// Create connection
$connect = new mysqli($servername, $username, $password,$db) or die(mysqli_error($connect));

if($connect) 
{
   
$msg="";

if(isset($_POST['submit'])){
	
		//session_start();
		
		//$files = "info".addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
		 $profile = $_FILES["image"]["name"]; 
		 $tempname = $_FILES["image"]["tmp_name"];     
		 $file_error = $_FILES["image"]["error"];
		 $folder = "image/".$profile;
		
			//$profile = $_FILES["image"]["name"];
			$Name = $_POST['Name'];
			$Lname = $_POST['Lname'];
			$Gender = $_POST['gens'];
			$dob = $_POST['dob'];
			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
			$Contact = $_POST['Contact'];
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
			
			

            // if(empty($Name))
            // {
            //     echo "first name can not be empty";
            //     echo  '<script> alert("yioooooo man first name can not be empty"); </script>';
            // }

            // if(empty($Lname))
            // {
            //     echo "first name can not be empty";
            //   //  header("Location: ../add_student.php");
            // }
			
			
	   
			// $connect = mysqli_connect("localhost", "root", "", "Students") or die(mysqli_error($connect)); 		
			//$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  




                       // $q = "SELECT Emailid from info WHERE Emailid = '$Emailid'";
                       // $fire=mysqli_query($connect, $q) or die("SOMETHINGS WRONG " .mysqli_error($connect));

                     $query2=mysqli_query($connect,"SELECT Emailid FROM info WHERE Emailid='$Emailid' ");
					 $result = mysqli_num_rows($query2);
					 
				/*	 if($result>0)
					 {
						echo  '<script> alert("EMAIL ID ALREADY EXISTS "); </script>';
						$msg= "EMAIL ALREADY EXISTS . ...........";
					//	header("Location: ../add_student.php");
					 }
					 else{*/


						$q = "INSERT INTO info(profile, Name, Lname, Gender, dob, Department, Semester, Contact, Emailid, Password) 
						VALUES ('$file','$Name','$Lname','$Gender','$dob','$Department','$Semester','$Contact','$Emailid','$Password')";  
					  
					  $fire = (mysqli_query($connect,$q) or die("Can't Insert Data. " .mysqli_error($connect)));				
					  if($fire)
					  {
						  echo  '<script> alert("YOUR DATA SAVED Sucessfull, Please Login "); </script>';	
						 // header("Location: ../index.php");
					  }else
					  {
						echo  '<script> alert("ERROR "); </script>';
						//header("Location: add_student.php");
					  }

					 }								
					
}else{
    echo "CONNECTION FAILED";
}

?>