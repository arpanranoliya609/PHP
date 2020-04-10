<form action="" method="post">
	<input type="text" name="id" placeholder="Enter Update Id"><br><br><hr><br>
	<input type="text" name="nm" placeholder="Enter name"><br><br>
	<input type="text" name="mo" placeholder="Enter number"><br><br>
	<textarea rows="5" name="fb" placeholder="Enter Feedback"></textarea><br><br>
	<input type="submit" name="sb" value="Update">
</form>
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];

	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$fb=$_POST['fb'];

	$con=mysqli_connect("localhost","root","","mydb");
	mysqli_query($con,"update feedback set name='$nm',mobile='$mo',msg='$fb' where id='$id'");

	echo "Update Data.....";
}
?>