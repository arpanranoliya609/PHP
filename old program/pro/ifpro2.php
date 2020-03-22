<h1><font size="7" color="green">==</font></h1><h1>Password</h1>
<br>
<form method="post">
<input type="text" name="nm" placeholder="Enter Password"><br><br>
<input type="text" name="nm2" placeholder="Enter Password"><br><br>
<input type="submit" name="sb" value="Next">
</form>
<hr>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];
	$b=$_POST['nm2'];

	if($a==$b)
	{
		echo "<font color='green'><h1>Welcome</h1><font>";
	}
	else
	{
		echo "<font color='red'><h1>NO Entry</h1><font>";
	}
}
?>