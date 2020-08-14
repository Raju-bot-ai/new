<?php
	session_start();
	if(isset($_SESSION['uname']))
	{
		echo "welcome".$_SESSION['uname'];
	}else{
		echo "you are not login";
	}
?>

<a href="index.php" style="float: right;"> log out</a>