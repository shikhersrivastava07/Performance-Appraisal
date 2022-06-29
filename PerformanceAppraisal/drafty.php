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
					<form method="POST">
                    <table class="table table-bordered">
	<thead>
		<th style="text-align:center;">Project name</th>
		<th>Yes</th>
		<th>No</th>
    </thead>
    <tr>
        <td>Madarchod</td>
        <td><input type="radio"></td>
        <td><input type="radio"></td>
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
include('dbcon.php');
if(isset($_POST['login'])){
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$query="SELECT * FROM `admin` WHERE username='$username' AND password='$password';";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1){
		?>
		<script type="text/javascript">alert('username or password wrong');</script>
		<?php
	}else{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}

}
?>