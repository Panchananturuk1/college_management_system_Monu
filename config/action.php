<?php require "connection.php"; ?> 
<?php

$msg="";

if(isset($_POST['submit'])){
	
		//session_start();
		
	//$files = "info".addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
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
			$Year = $_POST['Year'];
			$Batch = $_POST['Batch'];
			$Contact = $_POST['Contact'];
			$Emailid = $_POST['Emailid'];
			$Password = $_POST['Password'];
			$TotalFee = $_POST['TotalFee'];
			$PaidFee = $_POST['PaidFee'];
			

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
					 
					 if($result>0)
					 {
						echo  '<script> alert("EMAIL ID ALREADY EXISTS "); </script>';
						$msg= "EMAIL ALREADY EXISTS . ...........";
					//	header("Location: ../add_student.php");
					 }
					 else{

						$q = "INSERT INTO info(profile, Name, Lname, Gender, dob, Department, Year, Batch, Contact, Emailid, Password, TotalFee, PaidFee) 
						VALUES ('$profile','$Name','$Lname','$Gender','$dob','$Department','$Year','$Batch','$Contact','$Emailid','$Password','$TotalFee','$PaidFee')";  
					  
					  $fire = (mysqli_query($connect,$q) or die("Can't Insert Data. " .mysqli_error($connect)));				
					  if($fire)
					  {
						  echo  '<script> alert("YOUR DATA SAVED Sucessfull "); </script>';	
						  header("Location: ../add_student.php");
					  }

					 }





					 
					//    if(!empty($Emailid))
                    //     {
                    //     if(mysqli_num_rows($fire)>0)
                    //     {
                    //         echo  '<script> alert("Email is not available"); </script>';
                    //     } else { $Emailid_Valid = true; }

                    //      }

							





										
					
}

?>