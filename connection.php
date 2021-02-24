
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db = 'Students';

// Create connection
$connect = new mysqli($servername, $username, $password,$db) or die(mysqli_error($connect));

if($con) echo "YOUA RE CONNECTED";

?>