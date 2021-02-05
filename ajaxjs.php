
<?php
// Fetching Values From URL
$name2 = $_POST['fname1'];
$email2 = $_POST['lname1'];

$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysqli_select_db("test", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysqli_query("insert into contact(fname, lname) values ('$fname', '$lname')"); //Insert Query
echo "Form Submitted succesfully";
}
mysqli_close($connection); // Connection Closed
?>



<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX PHP and javascript</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<script src="script.js"></script>
</head>
<body>
<div id="mainform">
<div class="innerdiv">
<h2>Submit Form Using AJAX,PHP and javascript</h2>
<!-- Required Div Starts Here -->
<form id="form" name="form">
<h3>Fill Your Information!</h3>
<div>
<label>Name :</label>
<input id="fname" type="text">
<label>Last Name :</label>
<input id="lname" type="text">


<input id="submit" onclick="myFunction()" type="button" value="Submit">
</div>
</form>
<div id="clear"></div>
</div>
<div id="clear"></div>
</div>
</body>
</html>