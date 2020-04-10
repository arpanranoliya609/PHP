<form action="" method="post">
	Delete Data:
	<input type="text" name="del" placeholder="Enter Delete Id"><br><br>
	<input type="submit" name="sb" value="Delete"><br>
</form>
<?php
if(isset($_POST['sb']))
{
	$del=$_POST['del'];

	$con=mysqli_connect("localhost","root","","mydb");
	mysqli_query($con,"delete from feedback where id='$del'");

	echo "Delete&nbsp;".$del;
}
?>