
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
	  
	  
  
   
  if( document.myForm.image.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.image.focus() ;
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
	   
	   
 $connect = mysqli_connect("localhost", "root", "", "timetable")or die(mysqli_error($connect));
 
 if(isset($_POST["submit"]))  
 {  

			$Department = $_POST['Department'];
			$Year = $_POST['Year'];
			
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO info(timetb, Department, Year) VALUES ('$file','$Department','$Year')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
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
<link rel="stylesheet" type="text/css" href="admin2_page.css" />
</head>
<style>


		
</style>
<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 

 <div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:30%;" />
          <a href="index.php" style="text-decoration:none; color:white;">  <h1 style="margin: 0px; margin-left:27%; padding: 0px; box-sizing: border-box !important; font-weight: 300; font-size: 35px">
                College Management System</h1></a>
        </div>
	 
   
    <header class="transparent_header2" style="  width:190px; background-color: #00FFFF;">
	<div class="font">

		<a href="Faculty_Profile.php" style="text-decoration:none; color:white;">My Profile</a> <br /><br /> 
		<a href="add_assignment.php" style="text-decoration:none; color:white;">Add Assignments</a> <br /><br />    
		<p><a href="Add_attendence.php" style="text-decoration:none; color:white;">Add Attendence</a></p><br />   
		<p><a href="Add_result.php" style="text-decoration:none; color:white;">Add Result</a></p><br />
		<p><a href="add_timetable_admin.php" style="text-decoration:none; color:white;">Add Timetable</a></p>
		<p><a href="view_event_f.php" style="text-decoration:none; color:white;">View Event</a></p><br />
		<p><a href="index.php" style="text-decoration:none; color:white;">Logout</a></p><br />
	
    </div></header>
  
  			

<div class="box"  >
	<form  method="post"    name="myForm" onsubmit="return(validate());"   enctype="multipart/form-data" >

      <h1 style="text-align:center; font-size:40px;" >Add Timetable</h1><br />
		<select name="Department" >
		  <option  value="-1">Select Program</option>
		  <option value="BCA">BCA</option>
		  <option value="MCA">MCA</option>
		  <option value="MBA">MBA</option>
		  <option value="B.ED">B.ED</option>
		  <option value="INTEGRATED Msc">INTEGRATED Msc</option>
		</select><br /><br />

		<select name="Year">
		  <option  value="-1" >Select Year</option>
		  <option value="2012-2015">2012-2015</option>
		  <option value="2012-2014">2012-2014</option>
		  <option value="2013-2015">2013-2015</option>
		  <option value="2013-2016">2013-2016</option>
		  <option value="2014-2016">2014-2016</option>
		  <option value="2014-2017">2014-2017</option>
		  <option value="2015-2017">2015-2017</option>
		  <option value="2015-2018">2015-2018</option>
			
		</select><br /><br />

	 
		<input type="file" name="image" id="image" style="font-size:large; margin-left:150px;;"><br /><br />
        <input type="submit" name="submit" id="submit" value="Submit"  class="submit" />  
		 
  </form>
</div>

    <div style="margin-top:400px"></div>

</html>