<h1><font color="red">If else Programming</font></h1>

<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="GO">
	<hr>
</form>


<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];

	if($a<8)
	{
		echo "less";
	}
	if($a>8)
	{
		echo "Big";
	}
	if($a==8)
	{
		echo "same";
	}
}
?>