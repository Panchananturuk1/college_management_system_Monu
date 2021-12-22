<?php
$url='localhost';
$username='root';
$password='';
$con = mysqli_connect($url, $username, $password, "librarian");

if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $sql = "DELETE FROM iss_book WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record Returned successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
}else{
    $id = "id not set in GET Method";
}


?>