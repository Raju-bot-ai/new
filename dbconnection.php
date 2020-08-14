<?php
$name=$_POST['name'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root','','example');
$query="INSERT INTO `student`(`NAME`, `PASSWORD`) VALUES ('$name','$password')";
$run=mysqli_query($con,$query);
if($run==true)
	
		echo "data entered successfully";
	
	
	else
	
		echo "error!!!!";
	
	
?>
<?php echo "<br><br><br>"
?><body bgcolor="skyblue">
<a href="index.php" style="color:red;">click here</a> to entered another account
</body>