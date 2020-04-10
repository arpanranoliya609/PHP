<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter DB Name"><br><br>
	<input type="submit" name="sb" value="Database"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$db=$_POST['nm'];

	$con=mysqli_connect("localhost","root","");

	mysqli_query($con,"create database $db");

	echo "Create DB.....";
}
?>