<form action="" method="post">
	<input type="password" name="a" placeholder="Enter password"><br><br>
	<input type="password" name="b" placeholder="Confirm password"><br><br>
	<input type="submit" name="sb" value="verify Password"><br>
	<br>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];

	if($a == $b)
	{
		echo "<font color='red'><h1>".$a."<br>".$b."</h1></font>";
	}
	else
	{
		echo "<font color='green'><h1>Enter Same Password</h1></font>";
	}
}
?>