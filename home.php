<?php
session_start();
if(!isset($_SESSION['Username'])){
header('location:raju.php');}
$con=mysqli_connect('localhost','root','','practice');


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	<style>

	</style>
</head>
<body>
<script type="text/javascript">
	alert("Are you excited?")</script>

	<div style="background-color: skyblue;">
<marquee><b><i>Welcome to TECHNICAL RAJU puzzle world</i></b></marquee>
</div>
	<div class="card">
		<h3 class="text-center card-header">

		<U>TECHNICAL RAJU PUZZLE WORLD</U></h3>

	</div>

	<div class="container">
	<center><h2 class="text-success" style="margin-top: 15px;">
		Welcome <?php echo $_SESSION['Username'];?></h2></center>
			<a href="logout2.php"><button class="btn btn-primary" style="color:darkblue; float: right;margin-top: -45px;">Log out</button></a>

				</h2>

				<div class="card">
		<span style="color: orange" class="text-center card-header">

		All the best!!</span>
	
	</div>

  </div>



</div>
</body>
</html>