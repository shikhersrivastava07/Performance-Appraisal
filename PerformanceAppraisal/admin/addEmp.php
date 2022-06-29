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
?>
	<div class="text-center form">
		<div class="details">
			<h2 class="text-center visible-lg-inline bg-info">Add Employee</h2>
		</div>
	<form method="POST" action="addEmp.php">
		<div class="form-group">
			<label class="font-weight-bold" >Employee Name</label>
			<input type="text" name="ename" class="form-control col-lg-8 mx-auto"   pattern="^[a-zA-Z\s]+$" title="Name Should only contain letters" placeholder="Enter Employee Name">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Employee No.</label>
			<input type="text" name="enumber" class="form-control col-8 mx-auto"  pattern="^[0-9]+$" title="Enter Numerical Digits" placeholder="Enter Employee No.">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Password</label>
			<input type="password" name="e_pass" class="form-control col-8 mx-auto" placeholder="Enter Employee Password">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >City</label>
			<input type="text" name="city" class="form-control col-8 mx-auto"  pattern="^[a-zA-Z\s]+$" title="City Should only contain letters" placeholder="Enter city">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Contact No.</label>
			<input type="tel" name="contact" class="form-control col-8 mx-auto"  pattern="[1-9]{1}[0-9]{9}" title="Enter a 10 Digit valid contact number" placeholder="Enter Contact No.">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Department</label>
			<input type="text" name="department" class="form-control col-8 mx-auto"  pattern="^[a-zA-Z\s]+$" title="Department Should only contain letters" placeholder="Enter Department">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Project</label>
			<input type="text" name="project" class="form-control col-8 mx-auto"   pattern="^[a-zA-Z\s]+$" title="Project Should only contain letters" placeholder="Enter Project">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Pay Scale</label>
			<input type="text" name="pay_scale" class="form-control col-8 mx-auto" pattern="^[0-9]+$" title="Enter Numerical Digits"  placeholder="Enter Pay Scale">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Appraisal Amount</label>
			<input type="text" name="app_amount" class="form-control col-8 mx-auto" pattern="^[0-9]+$" title="Enter Numerical Digits"  placeholder="Enter Appraisal Amount">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Employee Level</label><br>
			<select name="grade">
				<option value="A">Grade A</option>
				<option value="B">Grade B</option>
				<option value="C">Grade C</option>
				<option value="D">Grade D</option>
			</select>
		</div>
		<button  type="submit" name="login" class="btn btn-primary ">Submit</button>
	</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
include('../dbcon.php');
$ename=$_POST['ename'];
$enumber=$_POST['enumber'];
$epass=$_POST['e_pass'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$department=$_POST['department'];
$pay_scale=$_POST['pay_scale'];
$project=$_POST['project'];
$grade=$_POST['grade'];
$aAmout=$_POST['app_amount'];
echo $aAmout;
$query="INSERT INTO `employee`(`employee_no`, `employee_name`,`e_pass`, `city`, `contact_no`, `department`,`project`,`pay_scale`,`grade`,`Radio`,`appAmount`) VALUES ('$enumber','$ename','$epass','$city','$contact','$department','$project','$pay_scale','$grade','no','$aAmout')";
$run=mysqli_query($con,$query);
if($run==true){
?>
<script type="text/javascript">
	alert("Data Instered Successfully.");
</script>
<?php
}else{
	echo '<div class="alert alert-danger"><strong>Data not inserted, Try Again!!</strong></div>';
}

}
?>
