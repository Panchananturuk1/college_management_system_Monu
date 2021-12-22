

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
	  
	 

   
  if( document.myForm.File.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.File.focus() ;
            return false;
         }
	
		 
	
		return true;
      }
	  </script>



<html>
<head>
<title> view timetable </title>
<link rel="stylesheet" type="text/css" href="css/admin1.css">


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
								<li> <a href="Student_Profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="view_book.php" class="header_Menu">View Books</a> </li><br />
								<li> <a href="view_timetb.php" class="header_Menu">View Timatables</a> </li><br />
								<li>  <a href="view_assignments.php" class="header_Menu">View Assignment</a> </li><br />
								<li> <a href="view_result.php" class="header_Menu">View Result</a> </li><br />
								<li> <a href="view_attendence.php" class="header_Menu">View Attendence</a>  </li><br />
								<li> <a href="view_event.php" class="header_Menu">View Event</a> </li><br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
				</div></header>

<form action="view_timetb.php" method="post"  name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
<div class="box"  >
<h1 style="text-align:center; font-size:40px;" >View Timetable</h1><br />



	
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





<input class="submit" name="submit" type="submit" value="Submit">  


</div>

<?php


$con = mysqli_connect('localhost', 'root', '', 'admin');

//$row2 = $row;

if(isset($_POST['submit'])){
  
  @$Department = $_POST['Department'];
  @$Semester = $_POST['Semester'];
 // $con = mysqli_connect('localhost', 'root', '', 'faculty');
  //$sql="SELECT * FROM assignment";
  $sql = "SELECT * FROM `timetable` WHERE Department='$Department' and Semester='$Semester'";
  $result = mysqli_query($con, $sql); 
  //$row=mysqli_fetch_all($result, MYSQLI_ASSOC);
  $row = mysqli_fetch_assoc($result);

if($row['Department'] == $Department && $row['Semester'] == $Semester )
{
  
  echo  '<script> alert("Record  Matching"); </script>';


}else{

  echo  '<script> alert("Record  not Matching"); </script>';
}
}

  ?>

<div class="row">
<div class="col-xs-8 col-xs-offset-2">
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>File Name</th>
                        <th>Date</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
               


                <?php /*
                 $i = 1;
                foreach ($row as $row2): ?>

                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row2['Department']; ?></td>
                    <td><?php echo $row2['Semester']; ?></td>
                    <td><?php echo $row2['filename']; ?></td>
                    <td><?php echo $row2['Date']; ?></td>
                    <td><a href="Faculty/Assignments/<?php echo $row2['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="Faculty/Assignments/<?php echo $row2['filename']; ?>" download>Download</td>
                </tr>
                    <?php endforeach; */
                    
                    ?>


                    <?php 
                    @$Department = $_POST['Department'];
                    @$Semester = $_POST['Semester'];
                    $sql2="SELECT * FROM `timetable` WHERE Department='$Department' and Semester='$Semester'";
                    $result2 = mysqli_query($con, $sql2); 
                   
                    $i = 1;
                    while($row2 = mysqli_fetch_array($result2)) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row2['Department']; ?></td>
                        <td><?php echo $row2['Semester']; ?></td>
                        <td><?php echo $row2['Year']; ?></td>
                        <td><?php echo $row2['timetb']; ?></td>
                        <td><a href="Faculty/Time_Table/<?php echo $row2['timetb']; ?>" target="_blank">View</a></td>
                        <td><a href="Faculty/Time_Table/<?php echo $row2['timetb']; ?>" download>Download</td>
                    </tr>
                    <?php } 
                    ?>




                </tbody>
            </table>
            </div>
    </div>



</form>




</body>

</html>