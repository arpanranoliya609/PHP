<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="text" name="nm2" placeholder="Enter Name"><br><br>
	<input type="submit" name="sb" value="OK">
	<hr><hr>

</form>

<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];
	$b=$_POST['nm2'];

	echo "<br><font color = 'red'><h1>".$a."</h1></font>";
	ECHO "<font color= 'yellow'><h1>".$b."</h1></font>";
}
?>
