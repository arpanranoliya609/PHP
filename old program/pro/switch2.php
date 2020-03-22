<h1>Swirch and Break</h1>
<form action="" method="post">
	<input type="text" name="eg" placeholder="Enter Your Age"><br><br>
	<input type="submit" name="sb" value="Next"><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['eg'];

	switch($a)
	{
		default:
		echo "<h1>Hiiii<font color='red'>Coding Ninja</font></h1>";
		break;

		case 18:
		echo header("location://google.com");
		break;

		case 22:
		echo header("location://facebook.com");
		break;
	}
}
?>