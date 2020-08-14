<?php
session_start()

?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body bgcolor="skyblue">
	<form method="post" action="dbconnection.php">
		<table border="1" align="center">
			<tr>
			     <td>Name:</td>
			     <td><input type="text" name="name" placeholder="Enter your name" required="required"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="Password" placeholder="Enter your password" required="required"></td></tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="login"></td>
			
			</tr>
		</table>
	</form>

</body>
</html>
<?php
	if (isset($_POST['submit']))

{
	$_SESSION["uname"]=$_POST["name"];
	header('location:welcome.php');
}


?>
