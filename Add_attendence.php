
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
	  
	  
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Name.focus() ;
            return false;
         }

	 if( document.myForm.image.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.image.focus() ;
            return false;
         }
	  
		 
	
		return true;
      }
	  </script>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   <?php 
	   
	   
 $connect = mysqli_connect("localhost", "root", "", "attendence");  
 
 if(isset($_POST["submit"]))  
 {  

 $Department = $_POST['Department'];
			$Year = $_POST['Year'];
		
			
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "insert into info(attendence, Department, Year) values ('$file','$Department','$Year')";
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
<title> Add Attendence</title>
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
								<li> <a href="Faculty_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="add_assignment.php" class="header_Menu">Add Assignments</a> </li><br />
								<li> <a href="Add_attendence.php" class="header_Menu">Add Attendence</a> </li><br />
								<li>  <a href="Add_result.php" class="header_Menu">Add Result</a> </li><br /><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
  
  			

<div class="box"  >
<form action="Add_attendence.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
  
    
		
      <h1 style="text-align:center; font-size:40px;" >Add Attendence</h1><br />

 
	
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
  <option value="2012-2015">2012-2015</option>
  <option value="2012-2014">2012-2014</option>
  <option value="2013-2015">2013-2015</option>
  <option value="2013-2016">2013-2016</option>
   <option value="2014-2016">2014-2016</option>
   <option value="2014-2017">2014-2017</option>
    <option value="2015-2017">2015-2017</option>
	 <option value="2015-2018">2015-2018</option>
	
</select> <br /><br />

      

	 
	  <input type="file" name="image" id="image" style="font-size:large; margin-left:150px;;"><br /><br />
  
		<input class="submit" name="submit" type="submit" value="Submit">  
  
   
  </form>
</div>

    <div style="margin-top:400px"></div>





</html>