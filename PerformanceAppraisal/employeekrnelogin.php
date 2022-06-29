<?php
include('header.php');
?>
<div>
	<a href="index.php" class="pull-right btn btn-primary">Back</a>
</div>
<div class="text-center">
	<form class="form-inline" method="post" action="employee.php">
	  <div class="form-group" >
			<div class="dropdown " >
  			<button class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width:120%">Select Employee
  			<span class="caret"></span></button>
  			<ul class="dropdown-menu">
</div>	
</div>	  
  			
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
	echo "hello world";
	include('dbcon.php');
	$uename=$_POST['uename'];
	$uenumber=$_POST['uenumber'];
	$query="SELECT  FROM `employee`";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)<1){
		echo '<tbody><tr><td>no records found</td></tr>';
	}else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count++;
			echo $data;
			?>
		<li>
			<?php echo $data['employee_name']; ?>
		</li>
		</ul>
		</div> 
	  </div>
	  <div class="form-group">
	  </div>
	</form>
</div><br>

		<?php
		}
	}
}
?>