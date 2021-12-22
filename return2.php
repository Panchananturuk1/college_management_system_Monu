












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
<?php include 'returnbook.php';?>
<html>
<title>Return Book </title>
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
								<li>  <a href="return2.php" class="header_Menu">Return Book 2</a> </li><br /><br />
								<li> <a href="view_event_l.php" class="header_Menu">View Event</a> </li>	<br />							
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
			</div></header>
 
           
<form action="return2.php" method="post"  name="myForm" onsubmit="return(validate());">

<div class="box">
     <h1 style="text-align:center; font-size:40px;" >Return Book</h1><br />
 

     <input type="hidden" id="id" name="id" class="form-control" required>
 <select name="Department" >


 <option  value="-1">Select Department</option>
 <option value="BCA">BCA</option>
 <option value="MCA">MCA</option>
 <option value="MBA">MBA</option>
  <option value="B.ED">B.ED</option>
   <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />
 
 
<input type="text" id="enrollment_no" name="enrollment_no" placeholder="Enter Enrollment No." style="font-size:large"><br /><br />





    <input class="submit" name="submit" type="submit" value="Submit">  
    
   
</div>

<table style="margin-left:35%; margin-top:15%">
 <tr>
 
    <th>ID</th>
   <th>Student NAME</th>
   <th>Enrollment Number</th>
   <th>BOOK NAME</th>
   <th>AUTHOR</th>
   
</tr>

 <?php

$con = mysqli_connect("localhost", "root", "", "librarian");

if(isset($_POST['submit'])){

          // $id = $GET['id'];
            $Department = $_POST['Department'];
           $enrollment_no = $_POST['enrollment_no'];	
           
           $query="SELECT * FROM `iss_book` WHERE Department='$Department' and enrollment_no='$enrollment_no'";		
           $result = mysqli_query($con, $query) or die(mysqli_error($con));

           if (mysqli_num_rows($result) > 0) {
               $row = mysqli_fetch_assoc($result);
       if($row['Department'] == $Department &&  $row['enrollment_no'] == $enrollment_no)
           {
   
    echo  '<script> alert("Record  Matching"); </script>';
    
           
          
          ?>
            <?php
            $i=0;
            $result2 = mysqli_query($con, $query) or die(mysqli_error($con));
            while($rows = mysqli_fetch_array($result2)) {
            ?>
            <tr class="<?php if(isset($classname)) echo $classname;?>">
            <td><?php echo $rows["id"]; ?></td>
            <td><?php echo $rows["book"]; ?></td>
            <td><?php echo $rows["book"]; ?></td>
            <td><?php echo $rows["Author_Name"]; ?></td>
          
            <td><a href="returnbook.php?id=<?php echo $rows["id"]; ?>">Return</a></td>
            </tr>
            <?php
            $i++;
            }
            
          
          /*  while($rows = mysqli_fetch_assoc($result2)) {
       
               echo "<tr>";
       
               echo "<td>" .$rows['Name']. "</td>";
               echo "<td>" .$rows['book']. "</td>";
               echo "<td>" .$rows['Author_Name']. "</td>";
                 echo '  
                    <td>
                       <input type="button" value="Return" name="Return" id="Return" /> 
                   </td>  
                    ';  
               echo "</tr>"; 
       
       } */
   }

else
{

   echo  '<script> alert("Error: Record Not Matching"); </script>';

   

           }		

       }


      /* if(isset($_POST['submit'])){

           $Department = $_POST['Department'];
           $enrollment_no = $_POST['enrollment_no'];	
           $book = $_POST['book'];
           $Author_Name = $_POST['Author_Name'];
           $Name = $_POST['Name'];


           $sql = "DELETE FROM iss_book WHERE id=3";



           

               if ($conn->query($sql) === TRUE) {
                 echo "Record deleted successfully";
               } else {
                     echo "Error deleting record: " . $conn->error;
               }

       } */

   

   }




?>

</table>


 </form>

   <div style="margin-top:400px"></div>



</html>