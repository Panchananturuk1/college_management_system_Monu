


<!DOCTYPE html>
<html>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />


<head>  
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
		<div class="header">            		
	  			<img alt="logo" class="logo_img" src="logo.png"; style="text-align:center" />			
				<div class="clg" >
					<a href="index.php" style="text-decoration:none; color:white;">
						<h1 class="myhead">
						 College Management System
						 </h1>
					 </a>
					 									
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<div style="float:right;">
					<div class="collapse navbar-collapse" id="micon">									 
						  <nav>
							<ul>
								<li> <a href="index.php" class="header_Menu">Home</a> </li>
								<li> <a href="#ABOUT" class="header_Menu">About</a> </li>
								<li>  <a href="#student" class="header_Menu">Student</a> </li>
								<li> <a href="#faculty" class="header_Menu">Faculty</a> </li>
								<li> <a href="#librarian" class="header_Menu">Librarian</a>  </li>
								<li> <a href="#admin" class="header_Menu">Admin</a> </li>
							</ul>
						  </nav>					 			 					
						</div> 	
					</div>				
				 </div>			 							 		 		
			</div>
		
				
		
    <div id="imgGallary" class="imageset">
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
    <br />
	
	<div class="container">
	
	
    <div id="ABOUT">
        <h1 class="headings">About</h1>
       <p>____________________________</p> 

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
			in 1961 and had discussion with the State Government for establishment of the Orissa University of Agriculture and Technology.
		</p>
        
    </div>

    <br /><br /><br /><br />
		
			<div class="notification">
				<marquee class="mrq" direction=up onMouseOver="this.stop();" OnMouseOut="this.start()" scrolldelay="10">	
					<p >    
						<a href="Admission-Notification-2018.pdf">Admission-Notification-2018</a><br /><br />
						<a href="imp%20Notice/Registration.pdf">imp Notice/Registration.pdf</a><br /><br />
						<a href="imp%20Notice/Registration.pdf">imp Notice/Registration.pdf</a><br />
					</p>
				</marquee> 
			</p>
		</div>
       
      <br />
	  

	
	
	<form action="Student_Profile.php" id="student" method="post"  name="myForm" onsubmit="return(validate());"  enctype="multipart/form-data">
		<h1 class="headings" id="STUDENT">Student</h1>
			<p>____________________________</p>
			<p class="login" >
				 Student logins to system with valid user name and password.Student can view timetables,assignments,
				 available books in library,Attendance,Result uploaded by faculty members.
			</p>

		<div class="login_form" >
			<p class="headings2" >Student Login</p>
			<input type="email" id="Emailid" name="Emailid" placeholder="Email id.........." >
			<input type="password" id="Password" name="Password" placeholder="Password  .."><br />
			<input class="submit" name="submit" type="submit" value="Signin"><br>
			<a href="add_student.php" style="text-decoration:none">Not a Member ? Register Here </a>	 
		</div>
	</form> <br />
  
	
	
   
   <form action="Faculty_Profile.php" id="faculty" method="post"  name="myForm2" onsubmit="return(validate2());" enctype="multipart/form-data">
     <h1 class="headings" id="FACULTY">Faculty</h1>
       <p>____________________________</p>

       <p class="login">
         Faculty can login with valid user name and password. Faculty have authority to upload timetables,assignments for students.
		 Faculty also add results and attendence of students.
       </p>

		<div class="login_form" >
			<p class="headings2" >Faculty Login</p>
			<input type="email" id="Emailid" name="Emailid" placeholder="Email id.........." >
			<input type="password" id="Password" name="Password" placeholder="Password  .."><br />
			<input class="submit" name="submit" type="submit" value="Signin" >

		</div>
    </form>
    <br />
	
 <form action="Librarian_Profile.php" id="librarian" method="post"  name="myForm3" onsubmit="return(validate3());"  enctype="multipart/form-data">

      <h1 class="headings" id="LIBRARIAN">Librarian</h1>
       <p >____________________________</p>
    
     <p class="login">
         Librarian can login with valid user name and password. Librarian have authority to add books, request books, issue and return books of students.
         </p>

         <div class="login_form">
			<p class="headings2" >Librarian Login</p>
			<input type="email" id="Emailid" name="Emailid" placeholder="Email id.........." > 
			<input type="password" id="Password" name="Password" placeholder="Password  .."><br />
			<input class="submit" name="submit" type="submit" value="Signin">
		 </div>
  </form><br />
   
  <div style="margin-bottom:100px">
	<form action="admin_profile.php" method="post" id="admin" name="myForm4" onsubmit="return(validate4());"  enctype="multipart/form-data">	
      <h1 class="headings" id="Admin">Admin</h1>
	  
       <p>____________________________</p>  
		<p class="login">
			 Admin have authority to add  faculty, librarian, events. 
			 Admin can add also events and view  all detail info about
			 student, faculty and librarian.
		</p>

		<div class="login_form">
			<p class="headings2" >Admin Login</p>
			<input type="email" id="Emailid" name="Emailid" placeholder="Email id.........."> 
			<input type="password" id="Password" name="Password" placeholder="Password  .."><br />
			<input class="submit" name="submit" type="submit" value="Signin">
		</div>
  </form> </div>

    <!-- Site footer -->
    
    <div style="margin-bottom:0px; width:100%; margin-left:0px; margin-right:0px;">
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">college management system is a cloud based educational ERP software that enables higher education institutions & colleges to manage online admission, student enrollment, students' attendance, online fees, grades, assignments, library books, etc.
</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
    
</footer>
   </div>

</div>

</body>
</html>