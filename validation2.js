
	  

     function validate()
          {
          
             if( document.myForm.Department.value == "-1" )
             {
                alert( "Please Select your Department!" );
                document.myForm.Department.focus() ;
                return false;
             }
         
         
            if( document.myForm.enrollment_no.value == "" )
             {
                alert( "Please Select your Department!" );
                document.myForm.Name.focus() ;
                return false;
             }
         
         
            if( document.myForm.book.value == "" )
             {
                alert( "Please Enter your Year!" );
                document.myForm.book.focus() ;
                return false;
             }
         
         
             if( document.myForm.Name.value == "" )
             {
                alert( "Please provide your Name!" );
                document.myForm.Name.focus() ;
                return false;
             }
    
    
           
       
          return true;
          }
         