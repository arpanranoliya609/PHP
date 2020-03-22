<form action="" method="post">
	<input type="nuber" name="no" placeholder="Enter Number">
	<br>
	<input type="submit" name="sb"><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];
	if($a<18)
	{
		echo "nani value";
	}
	if($a>18)
	{
		echo "Moti value";
	}
	if($a==18)
	{
		echo "Same value";
	}
}
?>