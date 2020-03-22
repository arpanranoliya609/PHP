<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="text" name="no" placeholder="Enter Nuber"><br><br>
	<input type="submit" name="sb" value="OK">
	<hr><hr>

</form>

<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];
	$b=$_POST['no'];

	echo $a;
	ECHO $b;
}
?>
