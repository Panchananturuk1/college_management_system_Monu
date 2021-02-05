


<!DOCTYPE html>
<html>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="index_style.css" />
<head>  
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

		<div class="transparent_header" >
            <img alt="logo" class=" image_repons" src="logo.png"; style="margin-left:40%;" />
			<a href="index.php" style="text-decoration:none; color:white;">
			<h1 class="myhead">
             College Management System</h1></a>
        </div>
		
		<div class="transparent_header2">	
			<img src="ouat_logo.png" style="height: 65px; width: 75px" />   
			<h1 style="font-size:xx-large; ">OUAT</h1><br />
			 <div><br />
				<a href="index.php" class="header_Menu">Home</a> <br /><br />
				<p><a href="#ABOUT" class="header_Menu">About</a></p><br />     
				<p><a href="#student" class="header_Menu">Student</a></p><br />   
				<p><a href="#faculty" class="header_Menu">Faculty</a></p><br />
				<p><a href="#librarian" class="header_Menu">Librarian</a></p><br />
				<p><a href="#admin" class="header_Menu">Admin</a></p><br />
			</div>
		</div>
		
		
    <div id="imgGallary" class="container">
		<img class="myimage" src="1.jpg" alt="" />
		<img class="myimage" src="2.jpg" alt="" />
		<img class="myimage" src="3.jpg" alt="" />
		<img class="myimage" src="4.jpg" alt="" />
		<img class="myimage" src="5.jpg" alt="" />
		<img class="myimage" src="6.jpg" alt="" />
		<img class="myimage" src="7.jpg" alt="" />	  
	</div>
	
<script>
//Image slideshow

    (function () {
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if (counter <= images.length) {
            setInterval(function () {
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if (counter === images.length) {
                    counter = 1;
                }
            }, 4000);
        }
    })();
	
	
	
//	form validation
	
	  function validate()
      {
      
         if( document.myForm.Emailid.value == "" )
         {
            alert( "Please provide your  Email id!" );
            document.myForm.Emailid.focus() ;
            return false;
         }
		 
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm.Emailid.focus();
      return false;
    }
		 	   var re = /^[\w ]+$/;

         
         if( document.myForm.Password.value == "" )
         {
            alert( "Please provide your pssword!"  );
            document.myForm.Password.focus() ;
            return false;
         }        
		 
	 if(!re.test(myForm.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Password.focus();
      return false;
    }
	   

		return true;
      }
	
	
	 function validate2()
      {
      
         if( document.myForm2.Emailid.value == "" )
         {
            alert( "Please provide your  Email id!" );
            document.myForm2.Emailid.focus() ;
            return false;
         }
		 
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm2.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm2.Emailid.focus();
      return false;
    }
		 	   var re = /^[\w ]+$/;

         
         if( document.myForm2.Password.value == "" )
         {
            alert( "Please provide your pssword!"  );
            document.myForm2.Password.focus() ;
            return false;
         }        
		 
	 if(!re.test(myForm2.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm2.Password.focus();
      return false;
    }
	   

		return true;
      }
	


 function validate3()
      {
      
         if( document.myForm3.Emailid.value == "" )
         {
            alert( "Please provide your  Email id!" );
            document.myForm3.Emailid.focus() ;
            return false;
         }
		 
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm3.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm3.Emailid.focus();
      return false;
    }
		 	   var re = /^[\w ]+$/;

         
         if( document.myForm3.Password.value == "" )
         {
            alert( "Please provide your pssword!"  );
            document.myForm3.Password.focus() ;
            return false;
         }        
		 
	 if(!re.test(myForm3.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm3.Password.focus();
      return false;
    }
	   

		return true;
      }
	

	
	function validate4()
      {
      
         if( document.myForm4.Emailid.value == "" )
         {
            alert( "Please provide your  Email id!" );
            document.myForm4.Emailid.focus() ;
            return false;
         }
		 
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm4.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm4.Emailid.focus();
      return false;
    }
		 	   var re = /^[\w ]+$/;

         
         if( document.myForm4.Password.value == "" )
         {
            alert( "Please provide your pssword!"  );
            document.myForm4.Password.focus() ;
            return false;
         }        
		 
	 if(!re.test(myForm4.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm4.Password.focus();
      return false;
    }
	   

		return true;
      }
	
	
</script>
    <br /><br /><br /><br />
    <div id="ABOUT">
        <h1 class="headings">About</h1>
       <p style="margin-left:250px">____________________________</p> 

        <p class="about_des">
		The Radhakrishnan University Education Commission of 1949 emphasised the need for establishing Agricultural Universities in India.,
		Subsequently, the indo-American team consistitued under the Chairmanship of Dr. K.R. Damle (1955), the then Vice-president of
		Indian Council of Agricultural Research, suggested a system of education for Indian as followed in the Land Grant Colleges of
		USA. The Planning Commission Committee felt the inadequacy of trained personnel for substantial output in agricultural operations
		with the then set up of research, education and extension in Agriculture, Animal Husbandry and allied fields. In course of time,
		these recommendations led to the creation of the agricultural universities to accomplish the integration of teaching, research and extension.<br />
		<br />
		In 1956, Dr. J.H. Longwell from the University of Misouri visited Orissa and had discussion with the State Government which resulted
		in a contract between the Government of India and the University of Missouri to provide assistance to the Agriculture and Veterinary
		Colleges of the State. In 1960, a decision was taken to establish an Agricultural University in Orissa in the pattern of the Land Grant
		Colleges of USA and Dr. Ide P. Trotter joined the Utkal Krishi Mahavidyalaya on 1st April, 1960, as a consultant in Educational
		Administration. President Elmer Ellies of the University of Missouri, visited the Agriculture and Veterinary Colleges of Orissa
		in 1961 and had discussion with the State Government for establishment of the Orissa University of Agriculture and Technology.</p>
        
    </div>

    <br /><br /><br /><br />
		
		 <marquee direction=up onMouseOver="this.stop();" OnMouseOut="this.start()" scrolldelay="10" style="text-align:center; font-size:x-large" >
	
        <p style="text-align:center; height :150px; ">
      
                <a href="Admission-Notification-2018.pdf" style="text-decoration:none;">Admission-Notification-2018</a><br /><br />
                <a href="imp%20Notice/Registration.pdf" style="text-decoration:none;">imp Notice/Registration.pdf</a><br /><br />
                 <a href="imp%20Notice/Registration.pdf" style="text-decoration:none;">imp Notice/Registration.pdf</a><br /></marquee> 

        </p>
      <br /><br /><br /><br />
	  

	<form action="Student_Profile.php" id="student" method="post"  name="myForm" onsubmit="return(validate());"  enctype="multipart/form-data">
		<h1 class="headings" id="STUDENT">Student</h1>
			<p style="margin-left:250px">____________________________</p>
			<p class="login" >
				 Student logins to system with valid user name and password. Student can view timetables, assignments,
				 available books in library, Attendance, Result uploaded by faculty members.
			</p>

		<div class="abc"  style="margin-left:250px">
			<p class="headings2" >Student Login</p>
			<input type="text" id="Emailid" name="Emailid" placeholder="Email id.........." style="font-size:large">
			<input type="password" id="Password" name="Password" placeholder="Password  .."style="font-size:large"><br />
			<input class="submit" name="submit" type="submit" value="Signin" style="font-size:x-large"><br>
			<a href="add_student.php" style="text-decoration:none">Not a Member ? Register Here </a>	 
		</div>
	</form>
   
   <form action="Faculty_Profile.php" id="faculty" method="post"  name="myForm2" onsubmit="return(validate2());"  enctype="multipart/form-data">
     <h1 class="headings" id="FACULTY">Faculty</h1>
       <p style="margin-left:250px">____________________________</p>

       <p class="login">
         Faculty can login with valid user name and password. Faculty have authority to upload timetables, assignments for students.
		 Faculty also add results and attendence of students.
       </p>

		<div class="abc" style="margin-left:250px">
			<p class="headings2" >Faculty Login</p>
			<input type="text" id="Emailid" name="Emailid" placeholder="Email id.........." style="font-size:large">
			<input type="password" id="Password" name="Password" placeholder="Password  .."style="font-size:large"><br />
			<input class="submit" name="submit" type="submit" value="Signin" style="font-size:x-large">

		</div>
    </form>
    <br /><br /><br /><br /> 
 <form action="Librarian_Profile.php" id="librarian" method="post"  name="myForm3" onsubmit="return(validate3());"  enctype="multipart/form-data">

      <h1 class="headings" id="LIBRARIAN">Librarian</h1>
       <p style="margin-left:250px">____________________________</p>
    
     <p class="login">
         Librarian can login with valid user name and password. Librarian have authority to add books, request books, issue and return books of students.
         </p>

         <div class="abc"  style="margin-left:250px">
			<p class="headings2" >Librarian Login</p>
			<input type="text" id="Emailid" name="Emailid" placeholder="Email id.........." style="font-size:large"> 
			<input type="password" id="Password" name="Password" placeholder="Password  .."style="font-size:large"><br />
			<input class="submit" name="submit" type="submit" value="Signin" style="font-size:x-large">
		 </div>
  </form>


      <br /><br /><br /><br /> 
         
	<form action="admin_profile.php" method="post" id="admin" name="myForm4" onsubmit="return(validate4());"  enctype="multipart/form-data">	
      <h1 class="headings" id="Admin">Admin</h1>
	  
       <p style="margin-left:250px">____________________________</p>  
		<p class="login">
			 Admin have authority to add  faculty, librarian, events. 
			 Admin can add also events and view  all detail info about
			 student, faculty and librarian.
		</p>

		<div class="abc"  style="margin-left:250px">
			<p class="headings2" >Admin Login</p>
			<input type="text" id="Emailid" name="Emailid" placeholder="Email id.........." style="font-size:large"> 
			<input type="password" id="Password" name="Password" placeholder="Password  .."style="font-size:large"><br />
			<input class="submit" name="submit" type="submit" value="Signin" style="font-size:x-large">
		</div>
  </form>




</body>
</html>