<form method="post">
	<input type="text" name="tbnm" placeholder="Enter Delete Table"><br><br>
	<input type="submit" name="sb" value="DROP TABLE"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$tb=$_POST['tbnm'];

	$con=mysqli_connect("localhost","root","","mydb");
	mysqli_query($con,"drop table $tb");

	echo "Drop&nbsp;"."$tb";
}
?>