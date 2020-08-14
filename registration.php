<?php 
session_start();
header('location:raju.php');
$con=mysqli_connect('localhost','root');
if ($con)
{
	echo "connected";
}
else
{
	echo "error";
 }
 mysqli_select_db($con,'practice');
$name=$_POST['Username'];
$Password=$_POST['password'];
$q="SELECT * FROM `sign up` WHERE Name='$name' && Password='$Password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
 {
 	echo "<br>"."<center>"."already account,log in please"."</center>";
 } else
 {
 	$qq="INSERT INTO `sign up`(`Name`, `Password`) VALUES ('$name','$Password')";
 	mysqli_query($con,$qq);
 }

?>
