<h1> negative & Positive Using IF ELSE IF </h1>
<form action="" method="post">
	<input type="number" name="no" placehoder="Enter number"><br><br>
	<input type="submit" name="sb">
	<br>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	if($n>0)
	{
		echo "Positive";
	}
	else if($n<0)
	{
		echo "Negative";
	}
	else
	{
		echo "Enter number";
	}

}
?>