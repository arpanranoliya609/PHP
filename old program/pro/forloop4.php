<font color="red" size="50px">For Loop.....</font>
<br>
<hr>
<form action="" method="post">
<input type="number" name="no" placeholder="Enter Number"><br><br>
<input type="submit" name="sb" value="FOOR LOOP"><br><br>
</form>
<hr>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	for ($i=0; $i<=$n; $i++) 
	{ 
		echo "<font color='#e6e600' size=20px>".$i."</font>";
	}
}
?>