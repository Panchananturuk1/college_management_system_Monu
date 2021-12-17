<?php
include 'facultydb.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$Gender=$_POST['Gender'];
		$Address=$_POST['Address'];
		$Department=$_POST['Department'];
		$Designation=$_POST['Designation'];
		$Qualification=$_POST['Qualification'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$Password=$_POST['Password'];
		$sql = "INSERT INTO `info`( `name`,'Gender','Address','Department','Designation','Qualification', `phone`,`email`,`Password`) 
		VALUES ('$name','$Gender','$Address','$Department','$Designation','$Qualification','$phone','$email','$Password')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$Gender=$_POST['Gender'];
		$Address=$_POST['Address'];
		$Department=$_POST['Department'];
		$Designation=$_POST['Designation'];
		$Qualification=$_POST['Qualification'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$Password=$_POST['Password'];
		$sql = "UPDATE `info` SET `name`='$name',`Gender`='$Gender',`Address`='$Address',`Department`='$Department',`Designation`='$Designation',`Qualification`='$Qualification',`phone`='$phone',`email`='$email',`Password`='$Password' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `info` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM info WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>