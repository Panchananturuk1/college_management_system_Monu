<?php
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
       //exit;
   }

}