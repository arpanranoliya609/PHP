<form action="" method="POST">
	<input type="text" name="pa" placeholder="Enter Password"><br>
	<input type="text" name="psw" placeholder="Enter Password Confirm"><br>
	<input type="submit" name="sb" value="Verify">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['pa'];
	$b=$_POST['psw'];

	if($a == $b)
	{
		echo "password is confirm";
	}
	else
	{
		echo "Password are not matched";
	}
}
?>