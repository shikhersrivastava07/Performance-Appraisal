
<!DOCTYPE HTML>
<html>
<head>

    <style>
     
div { margin: 20px; }


.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
   margin:0px auto;
}



.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}


.blue    { background-color: #3b8ec2; }

.blue select    { color: #fff; }
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}
#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}




    </style>

<title>Performance Appraisal Report</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	<script src="query.min.js"></script>
  	<script src="bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content_Type" content="text/html; charset=UTF-8">
    <!--<title>Performance Appraisal Report</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
  	<script src="bootstrap/jquery.min.js"></script>
  	<script src="bootstrap/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Content_Type" content="text/html; charset=UTF-8">-->
</head>
<body>
<div class="container">
		<div class="bg-primary text-center">
			<h1>Performance Appraisal Report</h1>
		</div>
    <form name = "form1" action="" method="post">
        <div class="styled-select blue">
        <select class="styled-select blue"  required>
            

        <?php
$con=mysqli_connect('localhost','root','','oms');

$res = mysqli_query($con,"SELECT employee_name FROM employee");
while($row=mysqli_fetch_array($res))
{

?>
<option value="" disabled selected hidden>Select Employee</option>
<option><?php echo $row["employee_name"]; ?> </option>
<?php
}
?>
        
        </select>
        
        </div>
        <br>
        
        <center>
        <input type="text" Placeholder="Assign Work" style="width:240px;background-color:#3b8ec2;border:0;padding:4px;color:white;"><br><br>
        <input  type="submit" name="submit" value="Submit" style="background-color:#3b8ec2;color:white;font-weight:900;width:240px;border:0;padding:10px;">
        </center>
    </form>
</body>

</head>
</html>