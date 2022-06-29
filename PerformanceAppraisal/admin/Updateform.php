<?php
session_start();
if($_SESSION['uid']){
}
else{
	 header('location:../login.php');
}
?>
<?php
include 'headeradmin.php';
include '../dbcon.php';
$id= $_GET['id'];
$sql="SELECT * FROM `employee` WHERE id='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<div class="text-center form">
		<div class="details">
			<h2 class="text-center visible-lg-inline bg-info">Update Employee</h2>
		</div>
	<form method="POST" action="updatedata.php">
		<div class="form-group">
			<label class="font-weight-bold" >Employee Name</label>
			<input type="text" name="ename" class="form-control col-lg-8 mx-auto" pattern="^[a-zA-Z\s]+$" title="Name Should only contain letters" value="<?php echo $data['employee_name']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Employee No.</label>
			<input type="text" name="enumber" class="form-control col-8 mx-auto" pattern="^[0-9]+$" title="Enter Numerical Digits" value="<?php echo $data['employee_no']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >City</label>
			<input type="text" name="city" class="form-control col-8 mx-auto" pattern="^[a-zA-Z\s]+$" title="City Should only contain letters" value="<?php echo $data['city']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Contact No.</label>
			<input type="text" name="contact" class="form-control col-8 mx-auto" pattern="[1-9]{1}[0-9]{9}" title="Enter a 10 Digit valid contact number" value="<?php echo $data['contact_no']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold ">Department</label>
			<input type="text" name="department" class="form-control col-8 mx-auto" pattern="^[a-zA-Z\s]+$" title="Department Should only contain letters" value="<?php echo $data['department']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold ">Project</label>
			<input type="text" name="project" class="form-control col-8 mx-auto" pattern="^[a-zA-Z\s]+$" title="Project Name Should only contain letters" value="<?php echo $data['project']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold ">Pay Scale</label>
			<input type="text" name="pay_scale" class="form-control col-8 mx-auto" pattern="^[0-9]+$" title="Enter Numerical Digits" value="<?php echo $data['pay_scale']; ?>">
		</div>
		<div class="form-group">
			<label class="font-weight-bold ">Grade</label>
			<input type="text" name="grade" class="form-control col-8 mx-auto" value="<?php echo $data['grade']; ?>">
		</div>
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		<button  type="submit" name="login" class="btn btn-primary">Submit</button>
	</form>
	</div>
</div>
</body>
</html>
