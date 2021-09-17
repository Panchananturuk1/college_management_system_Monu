<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'faculty');


$sql = "SELECT * FROM assignment";
$result = mysqli_query($conn, $sql);








	
	
	// Downloads files
	
	
	if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
	
	    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];

    // fetch file to download from database
    $sql = "SELECT * FROM assignment WHERE id=$id";
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
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('Faculty/Assignments/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
	
