<form action="" method="post">
	<input type="text" name="db" placeholder="Enter Delete DB"><br><br>
	<input type="submit" name="sb" value="Drop">
	<br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$db=$_POST['db'];

	$con=mysqli_connect("localhost","root","");
	mysqli_query($con,"drop database $db");

	echo "DROP&nbsp;"."$db";

}
?>