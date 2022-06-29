<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:employeelogin.php');
}
?>
<?php
include('header.php');
?>
			<div>
				<div class="text-center form">
					<div class="details">
						<h2 class="text-center visible-lg-inline bg-info">Employee Dashboard</h2>
						<a href="index.php" class="pull-right btn btn-primary">Back</a>
					</div>
					<form method="POST" action= "empDash.php">
                    <table class="table table-bordered">
	<thead>
		<th style="text-align:center;">Project name</th>
		<th><Center>Yes</Center></th>
		<th><center>No</center></th>
    </thead>
    <tr>
        <td><?php echo $_SESSION['project'];  ?></td>
        <td><input type="radio" value="yes" name="radPro">Yes</td>
        <td><input type="radio" value="no" name="radPro">No</td>
    </tr>
</table>

						<button  type="submit" name="login" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
</head>
</body>
</html>


<?php
if(isset($_POST['login']))
{
	$pro=$_SESSION['ID'];
   $con= mysqli_connect('localhost','root','','oms');
	$radio=$_POST['radPro'];
	$sql="UPDATE `employee` SET `Radio`='$radio' WHERE id='$pro'";
	$run=mysqli_query($con,$sql);
}

?>
