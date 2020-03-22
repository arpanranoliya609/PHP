<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="For Loop">
	<br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];
	for($i=0; $i<=$a; $i+=2)
	{
		echo $i;
	}
}
?>