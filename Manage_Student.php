<?php
include 'Student/studentdb.php';
?>


<html>
<title>Manage Student </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/student2.js"></script>

</head>

<style>
	
</style>
<body >

  <div class="header" >
            <img alt="logo"  class="logo_img" src="logo.png";  />
          <a href="index.php" style="text-decoration:none; color:white;">  
		  <h1 class="myheads">
                College Management System</h1></a>
        </div>
	 
		<header class="header2" style="  width:190px; ">
<div class="font">
  <nav>
							<ul>
								<li> <a href="admin_profile.php" class="header_Menu">My Profile</a> </li><br />
								<li> <a href="Manage_Student.php" class="header_Menu">Manage Student</a> </li><br />
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
								<li> <a href="Manage_Librarian2.php" class="header_Menu">Manage Librarian</a> </li><br />
								<li>  <a href="add_event_a.php" class="header_Menu">Add Event</a> </li><br />
								<li>  <a href="add_timetable.php" class="header_Menu">Add Timetable</a> </li><br />
								<li> <a href="view_requested_book.php" class="header_Menu">View Requested Book</a> </li><br />
								<li> <a href="view_availablebook.php" class="header_Menu">View Available Books</a>  </li><br />
								<li> <a href="index.php" class="header_Menu">Logout</a> </li>
							</ul>
						  </nav>					
    
	</div></header>
  
  
	
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Student</b></h2>
					</div>
					<div class="col-sm-6">
					<!--	<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a> -->
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SL NO</th>
                        <th>Name</th>
                        <th>Gender</th>
						<th>DOB</th>
						<th>Department</th>
						<th>Semester</th>
                        <th>Roll No.</th>
						<th>Phone</th>
						<th>Email</th>
                        <th>Pswd</th>
						<th>ACTION</th>
                       
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM info");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					
					<td><?php echo $row["Name"]." ". $row["Lname"]; ?></td>
				<!--<td><?php echo $row["profile"]; ?></td> -->
					<td><?php echo $row["Gender"]; ?></td>
                    <td><?php echo $row["dob"]; ?></td>
					<td><?php echo $row["Department"]; ?></td>
					<td><?php echo $row["Semester"]; ?></td>
                    <td><?php echo $row["Adms_Number"]; ?></td>
					<td><?php echo $row["Contact"]; ?></td>
					<td><?php echo $row["Emailid"]; ?></td>
					<td><?php echo $row["Password"]; ?></td>
					

					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-Name="<?php echo $row["Name"]; ?>"
                            data-Lname="<?php echo $row["Lname"]; ?>"
							data-Gender="<?php echo $row["Gender"]; ?>"
							data-dob="<?php echo $row["dob"]; ?>"
							data-Department="<?php echo $row["Department"]; ?>"
							data-Semester="<?php echo $row["Semester"]; ?>"
							data-Adms_Number="<?php echo $row["Adms_Number"]; ?>"
							data-Contact="<?php echo $row["Contact"]; ?>"
							data-Emailid="<?php echo $row["Emailid"]; ?>"
							data-Password="<?php echo $row["Password"]; ?>"
							
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>


    <!-- Add Modal HTML 
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	

					
						<div class="form-group">
							<label>First Name</label>
							<input type="text" id="Name" name="Name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" id="Lname" name="Lname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>GENDER</label>
							<input type="text" id="Gender" name="Gender" class="form-control" required>
						</div>
						<div class="form-group">
							<label>DOB</label>
							<input type="date" id="dob" name="dob" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" id="Department" name="Department" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Semester</label>
							<input type="text" id="Semester" name="Semester" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="phone" id="Contact" name="Contact" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="Emailid" name="Emailid" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Password</label>
							<input type="password" id="Password" name="Password" class="form-control" required>
						</div>		
									
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div> -->


	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						
					
						<div class="form-group">
							<label>First Name</label>
							<input type="text" id="Name_u" name="Name" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Last Name</label>
							<input type="text" id="Lname_u" name="Lname" class="form-control" required>
						</div>
					<!--	<div class="form-group">
							<label>profile</label>
							<input type="text" id="profile_u" name="profile" class="form-control" required>
						</div> -->
						<div class="form-group">
							<label>Gender</label>
							<input type="text" id="Gender_u" name="Gender" class="form-control" required>
						</div>
						<div class="form-group">
							<label>DOB</label>
							<input type="text" id="dob_u" name="dob" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" id="Department_u" name="Department" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Semester</label>
							<input type="text" id="Semester_u" name="Semester" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Roll No</label>
							<input type="text" id="Adms_Number_u" name="Adms_Number" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="phone" id="Contact_u" name="Contact" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input type="email" id="Emailid_u" name="Emailid" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="Password_u" name="Password" class="form-control" required>
						</div>
						
						
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <div style="margin-top:400px"></div>

</body>
</html>

