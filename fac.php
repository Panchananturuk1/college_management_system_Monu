


<script>



	
//	form validation
	
	  function validate()
      {
      
         if( document.myForm.fname.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.fname.focus() ;
            return false;
         }
         
         if( document.myForm.lname.value == "" )
         {
            alert( "Please provide your Last name!"  );
            document.myForm.lname.focus() ;
            return false;
         }        
        
	
		return true;
      }
	
</script>
<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
	

// On submitting form below function will execute.
if(isset($_POST['submit'])){

			
		$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			
			$con = mysqli_connect('localhost', 'root', '');
			
			mysqli_select_db($con,'contact3');
			$query="SELECT * FROM `monu` WHERE fname='$fname' and lname='$lname'";
			
			mysqli_query($con, $query);
			
		
$result = mysqli_query($con, $query) or die(mysqli_error($connection));
$row = mysqli_fetch_array($result);
if($row['fname'] == $fname && $row['lname'] == $lname)
{
	echo "login sucess!!!! WELCOME";
	
	echo "<script> window.location.assign('Faculty.php'); </script>";
	
}
else{
	echo  '<script> alert("User Nmae and Password are Wrong"); </script>';
}
		
	
	
	
	
if (empty($_POST["fname"])) {
$nameError = "Name is required";
} 
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["lname"])) {
$emailError = "Email is required";
} 


//php code ends here
?>