<h1>Enter Age</h1>
<br>
<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Your Age"><br>
	<input type="submit" name="sb" value="GO"><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];

	if(18>$a)
	{
		echo header("location://facebook.com");
	}
	else
	{
		echo header("location://linkedin.com");
	}
}
?>