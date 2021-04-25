
	  
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
  
  			
<form action="add_book.php" method="post"  name="myForm" onsubmit="return(validate());">

<div class="box"  >

      <h1 style="text-align:center; font-size:40px;" >Add Book</h1><br />
	  
	  
	  	
<select name="Department" >
 
 
  <option  value="-1">Select Program</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="MBA">MBA</option>
   <option value="B.ED">B.ED</option>
    <option value="INTEGRATED Msc">INTEGRATED Msc</option>
</select><br /> <br />

     <input type="text" id="Book_Name" name="Book_Name" placeholder="Book Name.." style="font-size:large"><br /><br />
  
      <input type="text" id="Author_Name" name="Author_Name" placeholder="Author Name.." style="font-size:large"><br /><br />

      
     <input type="text" id="Price" name="Price" placeholder=" Price.." style="font-size:large"><br /><br />
	 
	 <input class="submit" name="submit" type="submit" value="Submit">  

  </form>
</div>

    <div style="margin-top:400px"></div>




</html>




<script>

function validate()
     {
     
    
        if( document.myForm.Book_Name.value == "" )
        {
           alert( "Please provide your First Name!" );
           document.myForm.Book_Name.focus() ;
           return false;
        }
      
          if( document.myForm.Author_Name.value == "" )
        {
           alert( "Please provide your First Name!" );
           document.myForm.Author_Name.focus() ;
           return false;
        }
      
           if( document.myForm.Price.value == "" )
        {
           alert( "Please provide your First Name!" );
           document.myForm.Price.focus() ;
           return false;
        }
    
    var num = /^[0-9]+$/;
    
           
    if(!num.test(myForm.Price.value)) {
     alert("Error: Input contains invalid characters!");
     document.myForm.Price.focus();
     return false;
  
    }
    
    
       if( document.myForm.Department.value == "-1" )
        {
           alert( "Please Select your Department!" );
           return false;
        }
  
     return true;
     }
    </script>
    
    
    
    <?php
// On submitting form below function will execute.
if(isset($_POST['submit'])){

        
  
     
        
        $Department = $_POST['Department'];
        $Book_Name = $_POST['Book_Name'];
        $Author_Name = $_POST['Author_Name'];
        $Price = $_POST['Price'];
        
        
        
        $con = mysqli_connect('localhost', 'root', "", "librarian") or die(mysqli_error($con));
        //mysqli_select_db($con,'book');
        $q="insert into book(Department, Book_Name, Author_Name, Price) values('".$Department."','".$Book_Name."','".$Author_Name."','".$Price."')";
        
        $fire = mysqli_query($con, $q);
        
           if($fire){
            echo  '<script> alert("Data Sucessfully Submitted 2 "); </script>';
         //	echo "<script> window.location.assign('Student Profile.php'); </script>";
         }
      else{
         echo  '<script> alert("Data Sucessfully Submitted "); </script>';
          }

}

?>