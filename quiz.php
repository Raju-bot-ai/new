<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body><?php 

 echo "your answer is ".$_POST['$ans1'];  
?>
	<form action="quiz.php" method="post">
		<p>What is 5+4=</p>
		<input type="number" name="$ans1"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>