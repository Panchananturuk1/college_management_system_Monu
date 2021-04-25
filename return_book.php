












	  <script>

 function validate()
      {
      
	    if( document.myForm.Department.value == "-1" )
         {
            alert( "Please Select your Department!" );
            return false;
         }
	  
	  
		  if( document.myForm.enrollment_no.value == "-1" )
         {
            alert( "Please Select your enrollment Number!" );
            return false;
         }
	  
	  
		 
	 

		 
	
		return true;
      }
	  </script>






<script src="validation2.js"></script>

<html>
<title>My Profile </title>
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
	  font-size:20px;
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
								<li> <a href="Librarian_Profile.php" class="header_Menu">My Profile</a> </li><br />
                                        <li> <a href="add_book.php" class="header_Menu">Add Book</a> </li><br />
								<li> <a href="Request_book.php" class="header_Menu">Request Book</a> </li><br />
								<li> <a href="issue_book.php" class="header_Menu">Issue Book</a> </li><br />
								<li>  <a href="return_book.php" class="header_Menu">Return Book</a> </li><br /><br />
								<li> <a href="view_event_l.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
  
			
<form action="return_book.php" method="post"  name="myForm" onsubmit="return(validate());">

<div class="box">
      <h1 style="text-align:center; font-size:40px;" >Return Book</h1><br />
  
  <select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />
  
  
     <select name="enrollment_no" >
  <option  value="-1" >Select Enrollment No.</option>
  <option value="15/05/DCS/01">15/05/DCS/01</option>
  <option value="15/05/DCS/02">15/05/DCS/02</option>
  <option value="15/05/DCS/03">15/05/DCS/03</option>
   <option value="15/05/DCS/04">15/05/DCS/04</option>
   <option value="15/05/DCS/05">15/05/DCS/05</option>
   <option value="15/05/DCS/06">15/05/DCS/06</option>
   <option value="15/05/DCS/07">15/05/DCS/07</option>
</select><br /> <br />





	 <input class="submit" name="submit" type="submit" value="Submit">  
	 
	
 </div>

<table style="margin-left:35%; margin-top:15%">
  <tr>
  
  
	<th>Student NAME</th>
	<th>BOOK NAME</th>
	<th>AUTHOR</th>
	<th>PRICE</th>
	<th>Return</th>
</tr>

  <?php



if(isset($_POST['submit'])){


			
			$enrollment_no = $_POST['enrollment_no'];
			
			
			$Department = $_POST['Department'];
	
			
			$connect = mysqli_connect("localhost", "root", "", "Books");
			
		
	$query="SELECT * FROM `info` WHERE Department='$Department' and enrollment_no='$enrollment_no'";		
	

			mysqli_query($connect, $query);
			
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_fetch_array($result);
if($row['Department'] == $Department &&  $row['enrollment_no'] == $enrollment_no)
{
	
	session_start();

	
	
	 echo  '<script> alert("Record  Matching"); </script>';
	 
 	 	while($info = mysqli_fetch_assoc($result)) {
		
		echo "<tr>";
		
		echo "<td>" .$info['Name']. "</td>";
		echo "<td>" .$info['book']. "</td>";
		echo "<td>" .$info['Author_Name']. "</td>";
		echo "<td>" .$info['Price']. "</td>";
		
		
		  echo '  
                      	  
                               <td>  
							   

                    <input type="button" value="Return" name="Return" id="Return" /> 
                               </td>  
                    
                     ';  
		
		
		
		
		echo "</tr>";
		
		}
}

else
{

	echo  '<script> alert("Error: Record Not Matching"); </script>';

	

}

}



if(isset($_POST['Return'])){


		$Name = $_POST['Name'];  
	
			
			$connect = mysqli_connect("localhost", "root", "", "Books");
			
			
			$query2="delete from info where Name=$Name";

			mysqli_query($connect, $query2);
			
			if($query2==true){

					echo  '<script> alert("Book Return Sucessfully"); </script>';
			}


}



?>

</table>













  </form>

    <div style="margin-top:400px"></div>


<?php

?>


</html>