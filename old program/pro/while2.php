<form action="" method="post">
	<input type="text" name="n" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb"><br><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['n'];

	$n=1;
	while ($n<=$a)
	{
		echo $n++;

	}
}
?>