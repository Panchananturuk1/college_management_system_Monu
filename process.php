



<?php 

$username = $_POST['user'];
$password = $_POST['pass'];

//my sql injection


$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password );


//connect to the server and select database

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

 
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
	echo "login sucess!!!! WELCOME";
	echo "<script> window.location.assign('Student Profile.php'); </script>";
	
}
else{
	echo "faied to login";
}




?>