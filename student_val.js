 

 function validate()
      {
      
	  

	  
		 if( document.myForm.image.value == "" )
         {
            alert( "Please upload Your File!" );
            document.myForm.image.focus() ;
            return false;
         }
	  
	  
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Name.focus() ;
            return false;
         }

    var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(myForm.Name.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Name.focus();
      return false;
    }
	
	var letters = /^[A-Za-z]+$/;
	
	  if(!letters.test(myForm.Name.value)) {
      alert("Enter a valid name ");
      document.myForm.Name.focus();
      return false;
    }
	
	
	if( document.myForm.Lname.value == "" )
         {
            alert( "Please provide your Last Name!" );
            document.myForm.Lname.focus() ;
            return false;
         }
	
	
	  if(!re.test(myForm.Lname.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Lname.focus();
      return false;
    }
	  
	   if(!letters.test(myForm.Lname.value)) {
      alert("Enter a valid name ");
      document.myForm.Lname.focus();
      return false;
    }
	
	
	  
  if( document.myForm.Gender.value == "-1" )
         {
            alert( "Please Select your Gender!" );
            return false;
         }
		 
	 
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
        
		
		  if( document.myForm.Batch.value == "-1" )
         {
            alert( "Please Select your Batch!" );
            return false;
         }
	
	     if( document.myForm.Contact.value == "" )
         {
            alert( "Please provide your Contact Details!" );
            document.myForm.Contact.focus() ;
            return false;
         }
		 
		 var phoneno = /^\d{10}$/;
		  
         
		 
		  if(!phoneno.test(myForm.Contact.value)) {
      alert("Enter a valid Contact Number");
      document.myForm.Contact.focus();
      return false;
    }
		 
		 if(!re.test(myForm.Contact.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Contact.focus();
      return false;
    }
		 	var num = /^[0-9]+$/;
		 
		  if(!num.test(myForm.Contact.value)) {
      alert("YouMust Enter an Integer Not a Charcter");
      document.myForm.Contact.focus();
      return false;
    }
	
		      if( document.myForm.Emailid.value == "" ) 
         {
            alert( "Please provide your Emailid!" );
            document.myForm.Emailid.focus() ;
            return false;
         }
	
	

	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm.Emailid.focus();
      return false;
    }
	
	

	     if( document.myForm.Password.value == "" )
         {
            alert( "Please provide your Password!" );
            document.myForm.Password.focus() ;
            return false;
         }
		 
 
    if(!re.test(myForm.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Password.focus();
      return false;
    }
	
	     if( document.myForm.TotalFee.value == "" )
         {
            alert( "Please provide your TotalFee!" );
            document.myForm.TotalFee.focus() ;
            return false;
         }
		 
		 
		 
		  if(!re.test(myForm.TotalFee.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.TotalFee.focus();
      return false;
    }
	
	

	
	  if(!num.test(myForm.TotalFee.value)) {
      alert("YouMust Enter an Integer Not a Charcter");
      document.myForm.TotalFee.focus();
      return false;
    }
	
		 
		      if( document.myForm.PaidFee.value == "" )
         {
            alert( "Please provide your PaidFee!" );
            document.myForm.PaidFee.focus() ;
            return false;
         }
		 
		  if(!re.test(myForm.PaidFee.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.PaidFee.focus();
      return false;
    }
		 
	  if(!num.test(myForm.PaidFee.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.PaidFee.focus();
      return false;
    }
		 
	
		return true;
      }