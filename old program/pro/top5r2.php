<font color="red"><h1>TOP 3</h1></font><br>
<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Record"><br><br>
	<input type="submit" name="sb" value="ADD"><br><br>
	<hr>
	
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];

	for($i=1; $i<=$a; $i++)
	{
		if($i<=3)
		{
			echo "<img src='new.gif' height=20>".$i."<br>";
		}
		else
		{
			echo $i."<br>";
		}
	}
}
?>