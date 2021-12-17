<?php
include 'backend/facultydb.php';
?>


<html>
<title>Manage Faculty </title>
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
	<script src="ajax/faculty.js"></script>

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
								<li> <a href="admin_profile2.php" class="header_Menu">My Profile 2</a> </li><br />
								<li> <a href="add_faculty.php" class="header_Menu">Add Faculty</a> </li><br />
								<li> <a href="Manage_Faculty.php" class="header_Menu">Manage Faculty</a> </li><br />
								<li> <a href="add_librarian.php" class="header_Menu">Add Librarian</a> </li><br />
								<li>  <a href="add_event_a.php" class="header_Menu">Add Event</a> </li><br />
								<li> <a href="view_requested_book.php" class="header_Menu">View Requested Book</a> </li><br />
								<li> <a href="view_availablebook.php" class="header_Menu">View Available Books</a>  </li><br />
								<li> <a href="view_student.php" class="header_Menu">View Student</a> </li><br />
								<li> <a href="view_faculty.php" class="header_Menu">View Faculty </a> </li><br />
								<li> <a href="view_librarian.php" class="header_Menu">View Librarian</a> </li><br />
								<li> <a href="delete_data.php" class="header_Menu">Delete Data</a> </li><br />
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
						<h2>Manage <b>Fcaulties</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
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
						<th>Address</th>
						<th>Dept</th>
						<th>Designation</th>
						<th>Qualification</th>
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
					
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["Gender"]; ?></td>
					<td><?php echo $row["Address"]; ?></td>
					<td><?php echo $row["Department"]; ?></td>
					<td><?php echo $row["Designation"]; ?></td>
					<td><?php echo $row["Qualification"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["Password"]; ?></td>
					

					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							
							data-name="<?php echo $row["name"]; ?>"
							data-Gender="<?php echo $row["Gender"]; ?>"
							data-Address="<?php echo $row["Address"]; ?>"
							data-Department="<?php echo $row["Department"]; ?>"
							data-Designation="<?php echo $row["Designation"]; ?>"
							data-Qualification="<?php echo $row["Qualification"]; ?>"
							data-phone="<?php echo $row["phone"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
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
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	


				

						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>GENDER</label>
							<input type="text" id="Gender" name="Gender" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ADDRESS</label>
							<input type="text" id="Address" name="Address" class="form-control" required>
						</div>
						<div class="form-group">
							<label>DEPARTMENT</label>
							<input type="text" id="Department" name="Department" class="form-control" required>
						</div>
						<div class="form-group">
							<label>DESIGNATION</label>
							<input type="text" id="Designation" name="Designation" class="form-control" required>
						</div>
						<div class="form-group">
							<label>QUALIFICATION</label>
							<input type="text" id="Qualification" name="Qualification" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="text" id="phone" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>PASSWORD</label>
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
	</div>
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
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<input type="text" id="Gender_u" name="Gender" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="Address_u" name="Address" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Department</label>
							<input type="text" id="Department_u" name="Department" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Designation</label>
							<input type="text" id="Designation_u" name="Designation" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Qualification</label>
							<input type="text" id="Qualification_u" name="Qualification" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone_u" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" id="Password_u" name="Password" class="form-control" required>
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

