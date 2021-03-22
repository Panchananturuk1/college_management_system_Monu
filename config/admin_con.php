
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'Admin';

// Create connection
$connect = new mysqli($servername, $username, $password,$db) or die(mysqli_error($connect));

if($connect) 
{
    echo "YOUA RE CONNECTED";
}else{
    echo "CONNECTION FAILED";
}
?>