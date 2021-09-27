<?php
@$Department = $_POST['Department'];
  @$Semester = $_POST['Semester'];
  $con = mysqli_connect('localhost', 'root', '', 'faculty');
  $sql = "SELECT * FROM `assignment` WHERE Department='$Department' and Semester='$Semester'";
  $result = mysqli_query($con, $sql); 
  //$row=mysqli_fetch_all($result, MYSQLI_ASSOC);
  $row2 = mysqli_fetch_assoc($result);
?>