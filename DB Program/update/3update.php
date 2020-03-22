<form action="" method="post">
	<input type="number" name="id" placeholder="Enter Update ID"><br><hr>

	<input type="text" name="nm" placeholder="Enter Name"><br>
	<input type="text" name="mo" placeholder="Enter Mobile"><br>
	<input type="text" name="em" placeholder="Enter Email"><br><br>
	<input type="submit" name="sb" value="UPDATE"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$em=$_POST['em'];


	$update=mysqli_connect("localhost","root","","mydb");

	mysqli_query($update,"update aniruddh set name='$nm',mobile='$mo',email='$em' where id='$id'");

	echo "DATA UPDATE IN MySQLi";
}
?>