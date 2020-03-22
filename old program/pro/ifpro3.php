<form action="" method="post">
	<input type="password" name="p1" placeholder="Enter Password"><br><br>
	<input type="password" name="p2" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb" value="GO">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];

	if($p1 == $p2)
	{
		echo "OK";
	}
	else
	{
		echo "NO";
	}
}
?>