<?php
include 'studentdb.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$Name=$_POST['Name'];
		$Lname=$_POST['Lname'];
	//	$profile=$_POST['profile'];
		$Gender=$_POST['Gender'];
		$dob=$_POST['dob'];
		$Department=$_POST['Department'];
		$Adms_Number=$_POST['Adms_Number'];
		$Semester=$_POST['Semester'];
		$Contact=$_POST['Contact'];
		$Emailid=$_POST['Emailid'];
		$Password=$_POST['Password'];
		
		$sql = "INSERT INTO `info`( `Name`, `Lname`,`Gender`,`dob`,`Department`,`Adms_Number`,`Semester`,`Contact`,`Emailid`,`Password`) 
		VALUES ('$Name','$Lname','$Gender','$dob','$Department','$Adms_Number','$Semester','$Contact','$Emailid','$Password')";
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
		//	$profile=$_POST['profile'];
		$Name=$_POST['Name'];
		$Lname=$_POST['Lname'];
		$Gender=$_POST['Gender'];
		$dob=$_POST['dob'];
		$Department=$_POST['Department'];
		$Adms_Number=$_POST['Adms_Number'];
		$Semester=$_POST['Semester'];
		$Contact=$_POST['Contact'];
		$Emailid=$_POST['Emailid'];
		$Password=$_POST['Password'];
	
		$sql = "UPDATE `info` SET `Name`='$Name',`Lname`='$Lname',`Gender`='$Gender',`dob`='$dob',`Department`='$Department',
		`Adms_Number`='$Adms_Number',`Semester`='$Semester',`Contact`='$Contact',`Emailid`='$Emailid',`Password`='$Password' WHERE id=$id";
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