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
			<h2 class="text-center visible-lg-inline bg-info">Generate Appraisal</h2>
		</div>
	    <form method="POST" action="Appraisal.php">
		<div class="form-group">
        <form name = "form1" action="draft.php" method="post">
        <div class="styled-select blue">
        <select class="form-control col-lg-8 mx-auto" name="Selects" style="width:100%;height:32px;" required>


    

        <?php
$con=mysqli_connect('localhost','root','','oms');

$res = mysqli_query($con,"SELECT id , employee_name FROM employee");
while($row=mysqli_fetch_array($res))
{

?>
<option value="" disabled selected hidden >Select Employee</option>
<option><?php echo $row["employee_name"]; ?> </option>
<?php
}
?>
        
        </select>
        <br>
        <br>
        <input type="text" placeholder="Enter Appraisal Amount" class="form-control col-lg-8 mx-auto" name="AppAmount" pattern="^[0-9]+$" title="Enter Numerical Digits" required>
        </div>
			<!--<label class="font-weight-bold" >Employee Name</label>
			<input type="text" name="ename" class="form-control col-lg-8 mx-auto"   placeholder="Enter Employee Name">-->
		</div>
        <br>
        <br>
		<button  type="submit" name="login" class="btn btn-primary ">Submit</button>
	</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
include('../dbcon.php');
$amount=$_POST['AppAmount'];
$empname=$_POST['Selects'];
$query="UPDATE `employee` SET `AppAmount`='$amount' WHERE employee_name='$empname'";
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
