<form method="post">
	<input type="text" name="no" placeholder="Enter">
	<input type="submit" name="sb" value="OK">
</form>
<hr>
<?php
	if(isset($_POST['sb']))
	{
		$a=$_POST['no'];
		if(($a %2) == 0)
		{
			echo "even";
		}
		else
		{
			echo "odd";
		}
	}
?>	