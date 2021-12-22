
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
	  
	  
  
   
  if( document.myForm.timetb.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.timetb.focus() ;
            return false;
         }
	

	
	
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
	
	
	  

      }
	  </script>
	  
	  
	  


	   <?php 
	   
	   
 $con = mysqli_connect("localhost", "root", "", "admin")or die(mysqli_error($con));
 
 if(isset($_POST["submit"]))  
 {  

			$Department = $_POST['Department'];
			$Semester = $_POST['Semester'];
			$Year = $_POST['Year'];

			$timetb = $_FILES['timetb']['name'];
			$fileTmpName = $_FILES['timetb']['tmp_name'];
			$filepath = 'Faculty/Time_Table/' . $timetb;
			
     // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO timetable(timetb, Department, Semester, Year)
	   VALUES ('$timetb','$Department','$Semester','$Year')";  

$run = mysqli_query($con, $query) or die(mysqli_error($con));
      if($run)  
      {  
		move_uploaded_file($fileTmpName, $filepath);
           echo '<script>alert("Data Inserted into Database")</script>';  
      } 
	else
	  {
				echo '<script>alert("Please Insert Your File ")</script>';
	  }	
 }  


	

?>
	  
	  

<html>
<title> Add Timetable</title>
<head> 
<link rel="stylesheet" type="text/css" href="css/admin1.css" />

<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>


		
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
								<li> <a href="Manage_Student.php" class="header_Menu">Manage Student</a> </li><br />
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
								<li> <a href="Manage_Librarian2.php" class="header_Menu">Manage Librarian</a> </li><br />
								<li>  <a href="add_event_a.php" class="header_Menu">Add Event</a> </li><br />
								<li>  <a href="add_timetable.php" class="header_Menu">Add Timetable</a> </li><br />
								<li> <a href="view_requested_book.php" class="header_Menu">View Requested Book</a> </li><br />
								<li> <a href="view_availablebook.php" class="header_Menu">View Available Books</a>  </li><br />
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
	</div></header>
  
  			

<div class="box"  >
	<form  action="add_timetable.php" method="post"  name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data" >

      <h1 >Add Timetable</h1><br />
		<select name="Department" >
		  <option  value="-1">Select Program</option>
		  <option value="BCA">BCA</option>
		  <option value="MCA">MCA</option>
		  <option value="MBA">MBA</option>
		  <option value="B.ED">B.ED</option>
		  <option value="INTEGRATED Msc">INTEGRATED Msc</option>
		</select><br /><br />

		<select name="Semester">
        <option  value="-1" >Select Semester</option>
        <option value="1st Semester">1st Semester</option>
        <option value="2nd Semester">2nd Semester</option>
        <option value="3rd Semester">3rd Semester</option>
        <option value="4th Semester">4th Semester</option>
        <option value="5th Semester">5th Semester</option>
        <option value="6th Semester">6th Semester</option>
        </select> <br /><br />

		<select name="Year">
		<option  value="-1" >Select Year</option>
		  <option value="2016-2017">2016-2017</option>
		  <option value="2017-2018">2017-2018</option>
		  <option value="2018-2019">2018-2019</option>
		  <option value="2019-2020">2019-2020</option>
		  <option value="2020-2021">2020-2021</option>
		  <option value="2021-2022">2021-2022</option>
		  <option value="2022-2023">2018-2019</option>
		  <option value="2023-2024">2019-2020</option>	
		</select><br /><br />

	 
		<input type="file" name="timetb" id="timetb" class="myfile"><br /><br />
        <input type="submit" name="submit" id="submit" value="Submit"  class="submit" />  
		 
  </form>
</div>

    <div style="margin-top:400px"></div>

</html>