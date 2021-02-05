

<script>



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









<html>

<body>
<form method="post" action="ph.php" name="myForm" onsubmit="return(validate());">

First Name<input type="text" name="fname" id="fname">
 <br >
Last Nmae<input type="text" name="lname"  id="lname"> <br>
<input type="submit" name="Submit" value="Save"> <br >

</form>

</body>
</html>

<?php
		if(isset($_POST["submit"])=="Save")
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			
			$con = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($con,'test');
			$q="insert into contact(fname, lname) values('".$fname."','".$lname."')";
			
			mysqli_query($con, $q);
			
			if(mysqli_query($con, $q))
			
				echo "Data Saved In database";
			else
				echo mysqli_error();
		}
			
	/*		$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
	$query = "insert into contact(fname, lname) values('".$fname."', '".$lnmae."')";
	mysqli_query($connection, $query); 
		}  */
	
	?>