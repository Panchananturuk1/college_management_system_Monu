<?php 
	   
	   
       $conn = mysqli_connect("localhost", "root", "", "faculty")or die(mysqli_error($conn));

       $sql = "SELECT * FROM assignment";
       $result = mysqli_query($conn, $sql);

       $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
       if(isset($_POST["submit"]))  
       {  
      
                     $Department = $_POST['Department'];
                  $Semester = $_POST['Semester'];
                  
                     $filename = $_FILES['myfile']['name'];
      
                     // destination of the file on the server
                     $destination = 'Faculty/Assignments/' . $filename;
                 
                     // get the file extension
                     $extension = pathinfo($filename, PATHINFO_EXTENSION);
                 
                     // the physical file on a temporary uploads directory on the server
                     $file = $_FILES['myfile']['tmp_name'];
                     $size = $_FILES['myfile']['size'];
                 
                     if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                         echo "You file extension must be .zip, .pdf or .docx";
                     } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
                         echo "File too large!";
                     } else {
                         // move the uploaded (temporary) file to the specified destination
                         if (move_uploaded_file($file, $destination)) {
                             $sql = "INSERT INTO assignment (name, size, Department, Semester) VALUES ('$filename', $size, '$Department','$Semester')";
                             if (mysqli_query($conn, $sql)) {
                               echo  '<script> File uploaded successfully </script>';
                             }
                         } else {
                          echo  '<script>Failed to upload file.</script>';
                         }
                     }	
       }  
      



      
       if (isset($_GET['file_id'])) {
           $id = $_GET['file_id'];
       
           // fetch file to download from database
           $sql = "SELECT * FROM files WHERE id=$id";
           $result = mysqli_query($conn, $sql);
       
           $file = mysqli_fetch_assoc($result);
           $filepath = 'Faculty/Assignments/' . $file['name'];
       
           if (file_exists($filepath)) {
               header('Content-Description: File Transfer');
               header('Content-Type: application/octet-stream');
               header('Content-Disposition: attachment; filename=' . basename($filepath));
               header('Expires: 0');
               header('Cache-Control: must-revalidate');
               header('Pragma: public');
               header('Content-Length: ' . filesize('Faculty/Assignments/' . $file['name']));
               readfile('Faculty/Assignments/' . $file['name']);
       
               // Now update downloads count
              // $newCount = $file['downloads'] + 1;
               //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
               //mysqli_query($conn, $updateQuery);
               exit;
           }
       
       }

    

      ?>